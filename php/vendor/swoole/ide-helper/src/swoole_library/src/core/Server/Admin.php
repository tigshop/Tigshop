<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole\Server;

use Reflection;
use ReflectionClass;
use ReflectionExtension;
use ReflectionFunction;
use ReflectionMethod;
use Swoole\Coroutine;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Server;
use Swoole\StringObject;
use Swoole\Timer;

class Admin
{
    /**
     * gdb php
     * (gdb) p sizeof(zval)
     * $2 = 16
     * (gdb) p sizeof(zend_array)
     * $1 = 56
     * (gdb) p sizeof(zend_string)
     * $3 = 32
     * (gdb) p sizeof(zend_object)
     * $4 = 56
     */
    public const SIZE_OF_ZVAL = 16;

    public const SIZE_OF_ZEND_STRING = 32;

    public const SIZE_OF_ZEND_OBJECT = 56;

    public const SIZE_OF_ZEND_ARRAY = 56;

    private static $map = [
        'reactor' => SWOOLE_SERVER_COMMAND_REACTOR_THREAD,
        'reactor_thread' => SWOOLE_SERVER_COMMAND_REACTOR_THREAD,
        'worker' => SWOOLE_SERVER_COMMAND_EVENT_WORKER,
        'event_worker' => SWOOLE_SERVER_COMMAND_EVENT_WORKER,
        'task' => SWOOLE_SERVER_COMMAND_TASK_WORKER,
        'task_worker' => SWOOLE_SERVER_COMMAND_TASK_WORKER,
    ];

    private static $allList = [
        'all',
        'all_reactor',
        'all_reactor_thread',
        'all_worker',
        'all_event_worker',
        'all_task',
        'all_task_worker',
        'specific',
    ];

    private static $postMethodList = [
        'server_reload',
        'server_shutdown',
        'close_session',
    ];

    private static $accessToken = '';

    public static function init(Server $server)
    {
        $accepted_process_types = SWOOLE_SERVER_COMMAND_MASTER |
            SWOOLE_SERVER_COMMAND_MANAGER |
            SWOOLE_SERVER_COMMAND_EVENT_WORKER |
            SWOOLE_SERVER_COMMAND_TASK_WORKER;

        $server->addCommand(
            'server_reload',
            $accepted_process_types,
            function ($server, $msg) {
                $server->reload();
                return self::json('Operation succeeded');
            }
        );

        $server->addCommand(
            'server_shutdown',
            $accepted_process_types,
            function ($server, $msg) {
                $server->shutdown();
            }
        );

        $server->addCommand(
            'coroutine_stats',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(Coroutine::stats());
            }
        );

        $server->addCommand(
            'coroutine_list',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(iterator_to_array(Coroutine::list()));
            }
        );

        $server->addCommand(
            'coroutine_bt',
            $accepted_process_types,
            function ($server, $msg) {
                $json = json_decode($msg);
                $cid = empty($json->cid) ? 0 : intval($json->cid);
                $bt = Coroutine::getBackTrace($cid);
                if ($bt === false) {
                    return self::json("Coroutine#{$cid} not exists", 4004);
                }
                return self::json($bt);
            }
        );

        $server->addCommand(
            'server_stats',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json($server->stats());
            }
        );

        $server->addCommand(
            'server_setting',
            $accepted_process_types,
            function (Server $server, $msg) {
                $setting = $server->setting;
                $setting['mode'] = $server->mode;
                $setting['host'] = $server->host;
                $setting['port'] = $server->port;
                $setting['master_pid'] = $server->master_pid;
                $setting['manager_pid'] = $server->manager_pid;
                return self::json($setting);
            }
        );

        $server->addCommand(
            'get_client_info',
            $accepted_process_types,
            function (Server $server, $msg) {
                $json = json_decode($msg, true);
                if (empty($json['session_id'])) {
                    return self::json('require session_id', 4003);
                }
                return self::json($server->getClientInfo(intval($json['session_id'])));
            }
        );

        $server->addCommand('close_session', $accepted_process_types, [__CLASS__, 'handlerCloseSession']);
        $server->addCommand('get_version_info', $accepted_process_types, [__CLASS__, 'handlerGetVersionInfo']);
        $server->addCommand('get_worker_info', $accepted_process_types, [__CLASS__, 'handlerGetWorkerInfo']);
        $server->addCommand('get_timer_list', $accepted_process_types, [__CLASS__, 'handlerGetTimerList']);
        $server->addCommand('get_coroutine_list', $accepted_process_types, [__CLASS__, 'handlerGetCoroutineList']);
        $server->addCommand('get_objects', $accepted_process_types, [__CLASS__, 'handlerGetObjects']);
        $server->addCommand('get_class_info', $accepted_process_types, [__CLASS__, 'handlerGetClassInfo']);
        $server->addCommand('get_function_info', $accepted_process_types, [__CLASS__, 'handlerGetFunctionInfo']);
        $server->addCommand('get_object_by_handle', $accepted_process_types, [__CLASS__, 'handlerGetObjectByHandle']);
        $server->addCommand('get_server_cpu_usage', $accepted_process_types, [__CLASS__, 'handlerGetServerCpuUsage']);
        $server->addCommand(
            'get_server_memory_usage',
            $accepted_process_types,
            [__CLASS__, 'handlerGetServerMemoryUsage']
        );
        $server->addCommand(
            'get_static_property_value',
            $accepted_process_types,
            [__CLASS__, 'handlerGetStaticPropertyValue']
        );
        $server->addCommand(
            'get_defined_functions',
            $accepted_process_types,
            [__CLASS__, 'handlerGetDefinedFunctions']
        );
        $server->addCommand('get_declared_classes', $accepted_process_types, [__CLASS__, 'handlerGetDeclaredClasses']);

        $server->addCommand(
            'gc_status',
            $accepted_process_types,
            function ($server, $msg) {
                $status = function_exists('gc_status') ? gc_status() : [];
                return self::json($status);
            }
        );

        if (extension_loaded('opcache')) {
            $server->addCommand(
                'opcache_status',
                $accepted_process_types,
                function ($server, $msg) {
                    return self::json(opcache_get_status(true));
                }
            );
        }

        $server->addCommand(
            'getpid',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(['pid' => posix_getpid()]);
            }
        );

        $server->addCommand(
            'memory_usage',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json([
                    'usage' => memory_get_usage(),
                    'real_usage' => memory_get_usage(true),
                ]);
            }
        );

        $server->addCommand(
            'get_included_files',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(['files' => get_included_files()]);
            }
        );

        $server->addCommand('get_resources', $accepted_process_types, [__CLASS__, 'handlerGetResources']);

        $server->addCommand(
            'get_defined_constants',
            $accepted_process_types,
            function ($server, $msg) {
                $constants = get_defined_constants();
                foreach ($constants as $k => $c) {
                    if (is_resource($c)) {
                        unset($constants[$k]);
                    }
                }
                unset($constants['NULL'], $constants['NAN'], $constants['INF']);
                return self::json($constants);
            }
        );

        $server->addCommand(
            'get_loaded_extensions',
            $accepted_process_types,
            function ($server, $msg) {
                $extensions = get_loaded_extensions();
                $list = [];
                foreach ($extensions as $key => $extension) {
                    $ext = new ReflectionExtension($extension);
                    $list[$key] = [
                        'id' => ++$key,
                        'name' => $extension,
                        'version' => $ext->getVersion() ?? '',
                    ];
                }
                return self::json($list);
            }
        );

        $server->addCommand(
            'get_declared_interfaces',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(get_declared_interfaces());
            }
        );

        $server->addCommand(
            'get_declared_traits',
            $accepted_process_types,
            function ($server, $msg) {
                return self::json(get_declared_traits());
            }
        );

        $server->addCommand(
            'get_included_file_contents',
            $accepted_process_types,
            function (Server $server, $msg) {
                $json = json_decode($msg, true);
                if (empty($json['filename'])) {
                    return self::json('require filename', 4003);
                }

                if (!file_exists($json['filename'])) {
                    return self::json("{$json['filename']} not exist", 4004);
                }

                if (!in_array($json['filename'], get_included_files())) {
                    return self::json('no permission', 4003);
                }

                return self::json(file_get_contents($json['filename']));
            }
        );

        $server->addCommand(
            'get_globals',
            $accepted_process_types,
            function ($server, $msg) {
                $globals = [];
                foreach ($GLOBALS as $key => $item) {
                    if ($key === 'GLOBALS') {
                        continue;
                    }
                    $type = gettype($item);
                    $other = [];
                    if ($type === 'object') {
                        $other = [
                            'class_name' => get_class($item),
                            'object_id' => spl_object_id($item),
                            'object_hash' => spl_object_hash($item),
                        ];
                    }
                    if ($type == 'resource' || $type == 'resource (closed)') {
                        $item = '';
                    }
                    $globals[] = [
                        'key' => $key,
                        'value' => $item,
                        'type' => $type,
                        'other' => $other,
                    ];
                }
                return self::json($globals);
            }
        );

        $server->addCommand(
            'get_extension_info',
            $accepted_process_types,
            function (Server $server, $msg) {
                $json = json_decode($msg, true);

                if (empty($json['extension_name']) || !extension_loaded($json['extension_name'])) {
                    return self::json('require extension_name', 4004);
                }

                $ext = new ReflectionExtension($json['extension_name']);

                ob_start();
                $ext->info();
                $info = ob_get_clean();

                $constants = $ext->getConstants();
                foreach ($constants as $k => $c) {
                    if (is_resource($c)) {
                        unset($constants[$k]);
                    }
                }

                unset($constants['NULL'], $constants['NAN'], $constants['INF']);

                return self::json([
                    'classes' => $ext->getClassNames(),
                    'version' => $ext->getVersion(),
                    'constants' => $constants,
                    'ini_entries' => $ext->getINIEntries(),
                    'dependencies' => $ext->getDependencies(),
                    'functions' => array_keys($ext->getFunctions()),
                    'info' => trim($info),
                ]);
            }
        );

        $server->addCommand(
            'get_composer_packages',
            $accepted_process_types,
            function (Server $server, $msg) {
                if (!class_exists(\Composer\InstalledVersions::class)) {
                    return self::json('require composer 2.0', 4003);
                }

                $list = [];
                foreach (['getAllRawData', 'getRawData'] as $method) {
                    if (!method_exists(\Composer\InstalledVersions::class, $method)) {
                        continue;
                    }

                    $raw_data[] = \Composer\InstalledVersions::$method();
                    if ($method === 'getAllRawData') {
                        $raw_data = \Composer\InstalledVersions::$method();
                        array_shift($raw_data);
                    }

                    foreach ($raw_data as $key => $package) {
                        $key_name = $package['root']['name'];
                        if ($package['root']['name'] === '__root__' && isset($list['__root__'])) {
                            $key_name = "__root__{$key}";
                        }
                        $package['root']['install_path'] = !empty($package['root']['install_path']) ? realpath($package['root']['install_path']) : '';
                        $list[$key_name] = $package;
                    }
                    break;
                }
                return self::json($list);
            }
        );
    }

    public static function getAccessToken(): string
    {
        return self::$accessToken;
    }

    public static function start(Server $server)
    {
        $admin_server_uri = swoole_string($server->setting['admin_server']);
        if ($admin_server_uri->startsWith('unix:/')) {
            return swoole_error_log(SWOOLE_LOG_ERROR, "admin_server[{$server->setting['admin_server']}] is not supported");
        }

        if ($admin_server_uri->contains('@')) {
            [$access_name, $access_secret] = $admin_server_uri->split('@', 2)->get(0)->split(':', 2)->toArray();
            self::$accessToken = sha1($access_name . $access_secret);
            [$host, $port] = $admin_server_uri->split('@', 2)->get(1)->split(':', 2)->toArray();
        } else {
            [$host, $port] = $admin_server_uri->split(':', 2)->toArray();
        }

        $admin_server = new Coroutine\Http\Server($host, intval($port));

        $admin_server->handle('/api', function (Request $req, Response $resp) use ($server) {
            $path_array = swoole_string($req->server['request_uri'])->trim('/')->split('/');
            if ($path_array->count() < 2 or $path_array->count() > 3) {
                $resp->status(403);
                $resp->end(self::json('Bad API path', 4003));
                return;
            }

            $resp->header('Server', 'swoole-admin-server');
            $resp->header('Access-Control-Allow-Origin', '*');
            $resp->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
            $resp->header('Access-Control-Allow-Headers', 'X-ACCESS-TOKEN, X-ADMIN-SERVER-ACCESS-TOKEN');

            $method = $req->getMethod();

            if ($method === 'OPTIONS') {
                return $resp->end();
            }

            $token = self::getAccessToken();
            if (!empty($token)) {
                $token_header = $req->header['x-admin-server-access-token'] ?? '';
                if ($token_header !== $token) {
                    $resp->status(403);
                    $resp->end(self::json('Bad access token', 4003));
                    return;
                }
            }

            $cmd = $path_array->get(1)->toString();

            if (in_array($cmd, self::$postMethodList) && $method != 'POST') {
                $resp->status(403);
                $resp->end(self::json('Bad request method', 4003));
                return;
            }

            if ($method == 'GET') {
                $data = $req->get;
            } else {
                $data = $req->post;
            }

            if ($cmd === 'multi') {
                $body = json_decode($req->getContent(), true);
                if (empty($body) || !is_array($body) || $method != 'POST') {
                    goto _bad_process;
                }

                $result = self::handlerMulti($server, $body);
                $resp->end(json_encode($result, JSON_INVALID_UTF8_IGNORE));
                return;
            }

            if ($path_array->count() == 2) {
                $process = swoole_string('master');
            } else {
                $process = $path_array->get(2);
            }

            if ($process->startsWith('master')) {
                $process_type = SWOOLE_SERVER_COMMAND_MASTER;
                $process_id = 0;
            } elseif ($process->startsWith('manager')) {
                $process_type = SWOOLE_SERVER_COMMAND_MANAGER;
                $process_id = 0;
            } elseif ($process->startsWith('all') || $process->equals('specific')) {
                if (!in_array($process->toString(), self::$allList)) {
                    goto _bad_process;
                }

                $result = self::handlerGetAll($server, $process, $cmd, $data);

                $resp->end(self::json($result));
                return;
            } else {
                $array = $process->split('-');
                if ($array->count() != 2) {
                    _bad_process:
                    $resp->status(403);
                    $resp->end(self::json('Bad process', 4003));
                    return;
                }

                if (!isset(self::$map[$array->get(0)->toString()])) {
                    goto _bad_process;
                }

                $process_type = self::$map[$array->get(0)->toString()];
                $process_id = intval($array->get(1)->toString());
            }

            $result = $server->command($cmd, $process_id, intval($process_type), $data, false);
            if (!$result) {
                $resp->end(json_encode([
                    'code' => swoole_last_error(),
                    'data' => swoole_strerror(swoole_last_error()),
                ]));
            } else {
                $resp->end($result);
            }
        });
        $admin_server->handle('/', function (Request $req, Response $resp) use ($server) {
            $resp->status(404);
        });
        $server->admin_server = $admin_server;
        $admin_server->start();
    }

    /**
     * @param $server Server
     * @param $msg
     * @return false|string
     */
    public static function handlerGetResources($server, $msg)
    {
        $resources = get_resources();
        $list = [];
        foreach ($resources as $r) {
            $info = [
                'id' => function_exists('get_resource_id') ? get_resource_id($r) : intval($r),
                'type' => get_resource_type($r),
            ];
            if ($info['type'] == 'stream') {
                $info['info'] = stream_get_meta_data($r);
            }
            $list[] = $info;
        }
        return self::json($list);
    }

    /**
     * @param $server Server
     * @param $msg
     * @return false|string
     */
    public static function handlerGetWorkerInfo($server, $msg)
    {
        $info = [
            'id' => $server->getWorkerId(),
            'pid' => $server->getWorkerPid(),
            'gc_status' => function_exists('gc_status') ? gc_status() : [],
            'memory_usage' => memory_get_usage(),
            'memory_real_usage' => memory_get_usage(true),
            'process_status' => self::getProcessStatus(),
            'coroutine_stats' => Coroutine::stats(),
            'timer_stats' => Timer::stats(),
        ];
        if (function_exists('swoole_get_vm_status')) {
            $info['vm_status'] = swoole_get_vm_status();
        }
        return self::json($info);
    }

    /**
     * @param $server
     * @param $msg
     * @return false|string
     */
    public static function handlerCloseSession($server, $msg)
    {
        $json = json_decode($msg, true);
        if (empty($json['session_id'])) {
            return self::json('require session_id', 4003);
        }
        if ($server->close(intval($json['session_id']), !empty($json['force']))) {
            return self::json([]);
        }
        return self::json(['error' => swoole_last_error()], 4004);
    }

    /**
     * @param $server
     * @param $msg
     * @return false|string
     */
    public static function handlerGetTimerList($server, $msg)
    {
        $list = [];
        foreach (Timer::list() as $timer_id) {
            $list[] = [
                'id' => $timer_id,
                'info' => Timer::info($timer_id),
            ];
        }

        return self::json($list);
    }

    /**
     * @param $server
     * @param $msg
     * @return false|string
     */
    public static function handlerGetCoroutineList($server, $msg)
    {
        $list = [];
        foreach (Coroutine::list() as $cid) {
            $list[] = [
                'id' => $cid,
                'elapsed' => Coroutine::getElapsed($cid),
                'stack_usage' => Coroutine::getStackUsage($cid),
                'backTrace' => Coroutine::getBackTrace($cid, DEBUG_BACKTRACE_IGNORE_ARGS, 1),
            ];
        }

        return self::json($list);
    }

    public static function handlerGetObjects($server, $msg)
    {
        if (!function_exists('swoole_get_objects')) {
            return self::json(['require ext-swoole_plus'], 5000);
        }
        $list = [];
        $objects = swoole_get_objects();
        foreach ($objects as $o) {
            $class_name = get_class($o);
            $class = new ReflectionClass($class_name);
            $filename = $class->getFileName();
            $line = $class->getStartLine();
            $list[] = [
                'id' => spl_object_id($o),
                'hash' => spl_object_hash($o),
                'class' => $class_name,
                'filename' => $filename ?: '',
                'line' => $line ?: '',
                'memory_size' => self::getObjectMemorySize($o),
            ];
        }

        return self::json($list);
    }

    public static function handlerGetClassInfo($server, $msg)
    {
        $json = json_decode($msg, true);
        if (empty($json['class_name']) && empty($json['interface_name'])) {
            return self::json(['error' => 'require class_name or interface_name'], 4004);
        }

        if (!empty($json['class_name'])) {
            if (!class_exists($json['class_name'], false) && !interface_exists($json['class_name'], false)) {
                return self::json("{$json['class_name']} not exists", 4003);
            }
            $name = $json['class_name'];
        }

        if (!empty($json['interface_name'])) {
            if (!interface_exists($json['interface_name'], false)) {
                return self::json("{$json['interface_name']} not exists", 4003);
            }
            $name = $json['interface_name'];
        }

        $class = new ReflectionClass($name);

        $filename = $class->getFileName();

        $getTmpConstants = function ($data) {
            $tmp = [];
            foreach ($data as $k => $v) {
                $tmp[] = [
                    'name' => $k,
                    'value' => is_array($v) ? var_export($v, true) : $v,
                    'type' => is_array($v) ? 'detail' : 'default',
                ];
            }
            return $tmp;
        };

        $tmpConstants = $class->getConstants();
        $constants = $tmpConstants ? $getTmpConstants($tmpConstants) : [];

        $staticProperties = [];
        $properties = [];
        $tmpProperties = $class->getProperties();

        $getTmpProperties = function ($class, $data) {
            $static = [];
            $noStatic = [];
            $defaultProperties = $class->getDefaultProperties();
            foreach ($data as $k => $v) {
                $name = $v->getName();
                $modifiers = Reflection::getModifierNames($v->getModifiers());
                if ($v->isStatic()) {
                    $static[] = [
                        'name' => $name,
                        'value' => $defaultProperties[$name],
                        'modifiers' => implode(' ', $modifiers),
                    ];
                } else {
                    $noStatic[] = [
                        'name' => $name,
                        'value' => $defaultProperties[$name],
                        'modifiers' => implode(' ', $modifiers),
                    ];
                }
            }
            return ['static' => $static, 'no_static' => $noStatic];
        };

        if ($tmpProperties) {
            $tmpProperties = $getTmpProperties($class, $tmpProperties);
            $staticProperties = $tmpProperties['static'];
            $properties = $tmpProperties['no_static'];
        }

        $staticMethods = [];
        $methods = [];
        $tmpStaticMethods = $class->getMethods();

        $getTmpMethods = function ($data) {
            $static = [];
            $noStatic = [];
            foreach ($data as $k => $v) {
                $name = $v->getName();
                $line = $v->getStartLine();
                $modifiers = Reflection::getModifierNames($v->getModifiers());
                if ($v->isStatic()) {
                    $static[] = [
                        'name' => $name,
                        'line' => $line ?: '',
                        'modifiers' => implode(' ', $modifiers),
                    ];
                } else {
                    $noStatic[] = [
                        'name' => $name,
                        'line' => $line ?: '',
                        'modifiers' => implode(' ', $modifiers),
                    ];
                }
            }
            return ['static' => $static, 'no_static' => $noStatic];
        };

        if ($tmpStaticMethods) {
            $tmpStaticMethods = $getTmpMethods($tmpStaticMethods);
            $staticMethods = $tmpStaticMethods['static'];
            $methods = $tmpStaticMethods['no_static'];
        }

        $tmpParentClass = $class->getParentClass();
        $parentClass = $tmpParentClass ? $tmpParentClass->getName() : '';

        $tmpInterface = $class->getInterfaceNames();
        $interface = $tmpInterface ?? [];

        $data = [
            'filename' => $filename,
            'constants' => $constants,
            'staticProperties' => $staticProperties,
            'properties' => $properties,
            'staticMethods' => $staticMethods,
            'methods' => $methods,
            'parentClass' => $parentClass,
            'interface' => $interface,
        ];
        return self::json($data);
    }

    public static function handlerGetFunctionInfo($server, $msg)
    {
        $json = json_decode($msg, true);

        $className = $json['class_name'] ?? '';
        $functionName = $json['function_name'] ?? '';

        if (empty($json) || empty($functionName)) {
            return self::json('require function_name', 4004);
        }

        $isStatic = false;
        if (!empty($className)) {
            if (!class_exists($className) && !interface_exists($className)) {
                return self::json("{$className} not exists", 4004);
            }
            if (!method_exists($className, $functionName)) {
                return self::json("{$className}->{$functionName} not exists", 4004);
            }
            $ref = new ReflectionMethod($className, $functionName);
            $isStatic = $ref->isStatic();
        } else {
            if (!function_exists($functionName)) {
                return self::json("{$functionName} not exists", 4004);
            }
            $ref = new ReflectionFunction($functionName);
        }

        $result = [
            'filename' => $ref->getFileName(),
            'line' => $ref->getStartLine() ?? '',
            'num' => $ref->getNumberOfParameters(),
            'user_defined' => $ref->isUserDefined(),
            'extension' => $ref->getExtensionName(),
            'is_static' => $isStatic,
        ];

        $params = $ref->getParameters();

        $list = [];
        foreach ($params as $param) {
            $type = $optional = $default = '';

            $paramName = $param->getName();

            if ($param->hasType()) {
                /** @var \ReflectionNamedType|\ReflectionUnionType $reflection */
                $reflection = $param->getType();
                if ($reflection instanceof \ReflectionUnionType) {
                    $unionType = [];
                    foreach ($reflection->getTypes() as $objType) {
                        $unionType[] = $objType->getName();
                    }
                    $type = implode('|', $unionType);
                } else {
                    $type = $reflection->getName();
                }
            }

            if ($param->isOptional() && !$param->isVariadic()) {
                if (!$result['user_defined'] && PHP_VERSION_ID < 80000) {
                    continue;
                }
                $optional = '?';
                if ($param->isDefaultValueAvailable()) {
                    $value = $param->getDefaultValue();
                    if (in_array($value, [true, false, null, ''])) {
                        if ($value === null) {
                            $value = 'null';
                        }
                        if ($value === true) {
                            $value = 'true';
                        }
                        if ($value === false) {
                            $value = 'false';
                        }
                        if ($value === '') {
                            $value = "''";
                        }
                    }
                    $default = " = {$value}";
                }
            }

            $isPassedByReference = $param->isPassedByReference() ? '&' : '';
            $isVariadic = $param->isVariadic() ? '...' : '';

            $option = "{$optional}{$type} {$isPassedByReference}{$isVariadic}";
            $param = "\${$paramName}{$default}";

            $list[] = [
                'optional' => $optional,
                'type' => $type,
                'is_passed_by_reference' => $isPassedByReference,
                'is_variadic' => $isVariadic,
                'name' => $paramName,
                'default' => $default,
                'full' => $option !== ' ' ? "{$option}{$param}" : $param,
            ];
        }
        $result['params'] = $list;

        return self::json($result);
    }

    public static function handlerGetObjectByHandle($server, $msg)
    {
        if (!function_exists('swoole_get_object_by_handle')) {
            return self::json(['require ext-swoole_plus'], 5000);
        }

        $json = json_decode($msg, true);
        if (empty($json) || empty($json['object_id']) || empty($json['object_hash'])) {
            return self::json(['error' => 'Params Error!'], 4004);
        }

        $object = swoole_get_object_by_handle((int) $json['object_id']);
        if (!$object) {
            return self::json(['error' => 'Object destroyed!'], 4004);
        }

        $object_hash = spl_object_hash($object);
        if ($object_hash != $json['object_hash']) {
            return self::json(['error' => 'Object destroyed!'], 4004);
        }

        return self::json(var_export($object, true));
    }

    public static function handlerGetVersionInfo($server, $msg)
    {
        $ip_arr = swoole_get_local_ip();
        $host = [];
        $local = [];
        foreach ($ip_arr as $k => $ip) {
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
                $host[] = $ip;
            } else {
                $local[] = $ip;
            }
        }
        $data = [
            'os' => php_uname('s') . '-' . php_uname('r'),
            'swoole' => swoole_version(),
            'php' => phpversion(),
            'ip' => $host ? $host[0] : $local[0],
        ];
        return self::json($data);
    }

    public static function handlerGetDefinedFunctions($server, $msg)
    {
        $functions = get_defined_functions();
        $arr = [];
        if ($functions) {
            $arr['internal'] = $functions['internal'];

            foreach ($functions['user'] as $function_name) {
                $function = new ReflectionFunction($function_name);
                $filename = $function->getFileName();
                $line = $function->getStartLine();
                $arr['user'][] = [
                    'function' => $function_name,
                    'filename' => $filename,
                    'line' => $line,
                ];
            }
        }
        return self::json($arr);
    }

    public static function handlerGetDeclaredClasses($server, $msg)
    {
        $classes = get_declared_classes();
        $arr = [];
        if ($classes) {
            foreach ($classes as $classes_name) {
                $function = new ReflectionClass($classes_name);
                $filename = $function->getFileName();
                $line = $function->getStartLine();
                $arr[] = [
                    'class' => $classes_name,
                    'filename' => $filename ?: '',
                    'line' => $line ?: '',
                ];
            }
        }
        return self::json($arr);
    }

    public static function handlerGetServerMemoryUsage($server, $msg)
    {
        $total = 0;

        $result['master'] = $result['manager'] = 0;
        if (self::haveMasterProcess($server)) {
            $result['master'] = self::getProcessMemoryRealUsage($server->master_pid);
        }
        $total += $result['master'];

        if (self::haveManagerProcess($server)) {
            $result['manager'] = self::getProcessMemoryRealUsage($server->manager_pid);
        }
        $total += $result['manager'];

        $n = $server->setting['worker_num'] + $server->setting['task_worker_num'];
        for ($i = 0; $i < $n; $i++) {
            $key = 'worker-' . $i;
            $result[$key] = self::getProcessMemoryRealUsage($server->getWorkerPid($i));
            $total += $result[$key];
        }

        $result['total'] = $total;

        $result['memory_size'] = 0;
        // TODO: Support other OS
        if (PHP_OS_FAMILY === 'Linux') {
            preg_match('#MemTotal:\s+(\d+) kB#i', file_get_contents('/proc/meminfo'), $match);
            $result['memory_size'] = $match[1] * 1024;
        }

        return self::json($result);
    }

    public static function handlerGetServerCpuUsage($server, $msg)
    {
        $total = 0;

        $result['master'] = $result['manager'] = 0;
        if (self::haveMasterProcess($server)) {
            $result['master'] = self::getProcessCpuUsage($server->master_pid);
        }

        $total += $result['master'][1] ?? 0;

        if (self::haveManagerProcess($server)) {
            $result['manager'] = self::getProcessCpuUsage($server->manager_pid);
        }

        $total += $result['manager'][1] ?? 0;

        $n = $server->setting['worker_num'] + $server->setting['task_worker_num'];
        for ($i = 0; $i < $n; $i++) {
            $key = 'worker-' . $i;
            $result[$key] = self::getProcessCpuUsage($server->getWorkerPid($i))[1] ?? 0;
            $total += $result[$key];
        }

        $result['total'] = $total;
        $result['cpu_num'] = swoole_cpu_num();

        return self::json($result);
    }

    public static function handlerGetStaticPropertyValue($server, $msg)
    {
        $json = json_decode($msg, true);
        if (empty($json['class_name'])) {
            return self::json(['error' => 'require class_name!'], 4004);
        }
        if (empty($json['property_name'])) {
            return self::json(['error' => 'require property_name!'], 4004);
        }

        $className = $json['class_name'];
        $propertyName = $json['property_name'];

        if (!class_exists($className)) {
            return self::json("class[{$className}] not exists", 4004);
        }

        $reflection = new ReflectionClass($className);
        $value = $reflection->getStaticPropertyValue($propertyName, []);

        $result = [
            'value' => var_export($value, true),
        ];
        return self::json($result);
    }

    private static function handlerMulti(Server $server, array $list)
    {
        $return_list = [];
        foreach ($list as $key => $content) {
            $path_array = swoole_string($content['path'])->trim('/')->split('/');
            $cmd = $path_array->get(1)->toString();

            if ($path_array->count() == 2) {
                $process = swoole_string('master');
            } else {
                $process = $path_array->get(2);
            }

            $data = [];
            $url_query = parse_url($process->toString(), PHP_URL_QUERY) ?? [];
            if (!empty($url_query)) {
                parse_str($url_query, $data);
            }
            $data = array_merge($data, $content['post'] ?? []);

            if ($process->startsWith('master')) {
                $process_type = SWOOLE_SERVER_COMMAND_MASTER;
                $process_id = 0;
            } elseif ($process->startsWith('manager')) {
                $process_type = SWOOLE_SERVER_COMMAND_MANAGER;
                $process_id = 0;
            } elseif ($process->startsWith('all') || $process->startsWith('specific')) {
                if (!in_array($process->toString(), self::$allList) && !$process->startsWith('specific')) {
                    $return_list[$key] = json_decode('{}');
                    continue;
                }

                $result = self::handlerGetAll($server, $process, $cmd, $data);

                $return_list[$key] = ['code' => 0, 'data' => $result];
                continue;
            } else {
                $array = $process->split('-');

                if ($array->count() != 2 || !isset(self::$map[$array->get(0)->toString()])) {
                    $return_list[$key] = json_decode('{}');
                    continue;
                }

                $process_type = self::$map[$array->get(0)->toString()];
                $process_id = intval($array->get(1)->toString());
            }

            $return_list[$key] = $server->command($cmd, $process_id, intval($process_type), $data, true);
        }

        return $return_list;
    }

    private static function handlerGetAll(Server $server, StringObject $process, $cmd, $data, bool $json_decode = true)
    {
        if ($process->equals('all')) {
            $result = self::handlerGetMaster($cmd, $data, $server, $json_decode) +
                self::handlerGetManager($cmd, $data, $server, $json_decode) +
                self::handlerGetAllWorker($cmd, $data, $server, $json_decode) +
                self::handlerGetAllTaskWorker($cmd, $data, $server, $json_decode);
        } elseif ($process->startsWith('all_reactor')) {
            $result = self::handlerGetAllReactor($cmd, $data, $server, $json_decode);
        } elseif ($process->equals('all_worker') || $process->equals('all_event_worker')) {
            $result = self::handlerGetAllWorker($cmd, $data, $server, $json_decode);
        } elseif ($process->startsWith('all_task')) {
            $result = self::handlerGetAllTaskWorker($cmd, $data, $server, $json_decode);
        } else {
            // specific
            $result = [];
            if (!empty($data['workers']) && is_array($data['workers'])) {
                foreach ($data['workers'] as $name) {
                    $process = swoole_string($name);
                    if ($process->startsWith('master')) {
                        $result += self::handlerGetMaster($cmd, $data, $server, $json_decode);
                    } elseif ($process->startsWith('manager')) {
                        $result += self::handlerGetManager($cmd, $data, $server, $json_decode);
                    } else {
                        $array = $process->split('-');
                        if ($array->count() != 2 || !isset(self::$map[$array->get(0)->toString()])) {
                            $result[$name] = $json_decode ? json_decode('{}') : $json_decode;
                        } else {
                            $process_type = self::$map[$array->get(0)->toString()];
                            $process_id = intval($array->get(1)->toString());
                            $result[$name] = $server->command($cmd, $process_id, $process_type, $data, $json_decode);
                        }
                    }
                }
            }
        }

        return $result;
    }

    private static function handlerGetMaster($cmd, $data, Server $server, bool $json_decode = false)
    {
        $list['master'] = $server->command($cmd, 0, SWOOLE_SERVER_COMMAND_MASTER, $data, $json_decode);
        return $list;
    }

    private static function handlerGetManager($cmd, $data, Server $server, bool $json_decode = false)
    {
        $list['manager'] = $server->command($cmd, 0, SWOOLE_SERVER_COMMAND_MANAGER, $data, $json_decode);
        return $list;
    }

    private static function handlerGetAllReactor($cmd, $data, Server $server, bool $json_decode = false)
    {
        $list = [];
        if ($server->mode === SWOOLE_BASE) {
            return $list;
        }
        $process_type = SWOOLE_SERVER_COMMAND_REACTOR_THREAD;
        if (empty($server->setting['reactor_num'])) {
            $reactor_num = $server->setting['worker_num'];
        } else {
            $reactor_num = $server->setting['reactor_num'];
        }
        for ($process_id = 0; $process_id < $reactor_num; $process_id++) {
            $list["reactor-{$process_id}"] = $server->command($cmd, $process_id, $process_type, $data, $json_decode);
        }
        return $list;
    }

    private static function handlerGetAllWorker($cmd, $data, Server $server, bool $json_decode = false)
    {
        $process_type = SWOOLE_SERVER_COMMAND_EVENT_WORKER;
        $worker_num = $server->setting['worker_num'];
        $list = [];
        for ($process_id = 0; $process_id < $worker_num; $process_id++) {
            $list["worker-{$process_id}"] = $server->command($cmd, $process_id, $process_type, $data, $json_decode);
        }
        return $list;
    }

    private static function handlerGetAllTaskWorker($cmd, $data, Server $server, bool $json_decode = false)
    {
        $process_type = SWOOLE_SERVER_COMMAND_TASK_WORKER;
        $list = [];
        if (empty($server->setting['task_worker_num'])) {
            return $list;
        }
        $task_worker_num = $server->setting['task_worker_num'];
        for ($process_id = 0; $process_id < $task_worker_num; $process_id++) {
            $list["task_worker-{$process_id}"] = $server->command($cmd, $process_id, $process_type, $data, $json_decode);
        }
        return $list;
    }

    private static function getProcessCpuUsage($pid)
    {
        // TODO: Support other OS
        if (PHP_OS_FAMILY !== 'Linux' || !file_exists("/proc/{$pid}/stat")) {
            return [0];
        }

        $statAll = file_get_contents('/proc/stat');
        $statProc = file_get_contents("/proc/{$pid}/stat");

        $dataAll = preg_split("/[ \t]+/", $statAll, 6);
        assert($dataAll[0] === 'cpu', '/proc/stat malformed');
        $dataProc = preg_split("/[ \t]+/", $statProc, 15);

        if (isset($dataProc[13]) and isset($dataProc[14])) {
            return [
                (int) $dataAll[1] + (int) $dataAll[2] + (int) $dataAll[3] + (int) $dataAll[4],
                (int) $dataProc[13] + (int) $dataProc[14],
            ];
        }
        return [(int) $dataAll[1] + (int) $dataAll[2] + (int) $dataAll[3] + (int) $dataAll[4]];
    }

    private static function getProcessMemoryRealUsage($pid = 'self')
    {
        $status = self::getProcessStatus($pid);
        if (!is_array($status) || !isset($status['VmRSS'])) {
            return 0;
        }
        return intval($status['VmRSS']) * 1024;
    }

    private static function getProcessStatus($pid = 'self')
    {
        $array = [];
        // TODO: Support other OS
        if (PHP_OS_FAMILY !== 'Linux' || !file_exists("/proc/{$pid}/status")) {
            return $array;
        }
        $status = swoole_string(trim(file_get_contents("/proc/{$pid}/status")));
        $lines = $status->split("\n");
        foreach ($lines as $l) {
            if (empty($l)) {
                continue;
            }
            [$k, $v] = swoole_string($l)->split(':');
            $array[$k] = trim($v);
        }
        return $array;
    }

    private static function getArrayMemorySize(array $a): int
    {
        $size = self::SIZE_OF_ZVAL + self::SIZE_OF_ZEND_ARRAY;
        foreach ($a as $k => $v) {
            if (is_string($k)) {
                $size += self::getStringMemorySize($k);
            } else {
                $size += self::SIZE_OF_ZVAL;
            }
            if (is_string($v)) {
                $size += self::getStringMemorySize($v);
            } elseif (is_array($v)) {
                $size += self::getArrayMemorySize($v);
            } else {
                $size += self::SIZE_OF_ZVAL;
            }
        }
        return $size;
    }

    private static function getStringMemorySize(string $s): int
    {
        return self::SIZE_OF_ZVAL + self::SIZE_OF_ZEND_STRING + strlen($s);
    }

    private static function getObjectMemorySize(object $o): int
    {
        $vars = get_object_vars($o);
        $size = self::SIZE_OF_ZEND_OBJECT;

        foreach ($vars as $v) {
            if (is_array($v)) {
                $size += self::getArrayMemorySize($v);
            } elseif (is_string($v)) {
                $size += self::getStringMemorySize($v);
            } else {
                $size += self::SIZE_OF_ZVAL;
            }
        }

        return $size;
    }

    private static function haveMasterProcess(Server $server): bool
    {
        if ($server->mode === SWOOLE_BASE) {
            return false;
        }

        return true;
    }

    private static function haveManagerProcess(Server $server): bool
    {
        if ($server->mode === SWOOLE_BASE && $server->getManagerPid() === 0) {
            return false;
        }

        return true;
    }

    private static function json($data, $code = 0)
    {
        $result = json_encode(['code' => $code, 'data' => $data], JSON_INVALID_UTF8_IGNORE);
        if (empty($result)) {
            return json_encode([
                'code' => 5010,
                'data' => ['message' => json_last_error_msg(), 'code' => json_last_error()],
            ]);
        }
        return $result;
    }
}
