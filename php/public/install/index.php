<?php
//**---------------------------------------------------------------------+
//** Tigshop安装文件  --- 强烈建议安装后删除该文件
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

//Access-Control-Allow-Origin
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization,  x-client-type, secret, x-locale-code");

//基础设置
date_default_timezone_set('PRC');
error_reporting(E_ALL & ~E_NOTICE);
header('Content-Type:application/json;charset=UTF-8');
define('APP_DIR', _dir_path(substr(dirname(__FILE__), 0, -15)));//项目目录
define('SITE_DIR', _dir_path(substr(dirname(__FILE__), 0, -8)));//入口文件目录
@set_time_limit(1000);
$envFileName = '.env';
//数据库
$demoSqlFile = APP_DIR . 'database/demo.sql';
$pureSqlFile = APP_DIR . 'database/pure.sql';
//基础方法


if (file_exists(APP_DIR . 'install.lock') || file_exists(APP_DIR . '/.env')) {
    returnJson(
        '已安装，如需重新安装请确保环境正常，并且删除根目录的install.lock文件和.env文件',
        0,
        [],
        true,
        -1
    );
}


$step = $_GET['step'] ?? 1;

if ($step == 1) {

    $text = <<<EOF
欢迎使用 Tigshop 电商软件。本许可协议（以下简称 “协议”）是你（个人或单一实体）与 Tigshop 软件提供商之间就 Tigshop 电商软件的安装和使用所达成的法律协议。在安装、复制或使用 Tigshop 电商软件之前，请仔细阅读本协议的所有条款和条件。安装、复制或使用 Tigshop 电商软件即表示你同意受本协议的约束。
一、定义
“软件” 指 Tigshop 电商软件，包括但不限于所有相关的程序文件、文档、图像、音频和视频内容以及任何随附的材料。
“用户” 指安装、复制或使用软件的个人或实体。
二、许可授予
软件提供商授予用户非排他性、不可转让的许可，以在单一计算机系统上安装和使用软件，仅用于个人或内部商业目的。
用户不得在未经软件提供商事先书面同意的情况下，将软件安装在多台计算机系统上或在网络上共享软件。
三、限制
用户不得对软件进行反向工程、反编译、反汇编或试图以其他方式获取软件的源代码。
用户不得修改、改编、翻译软件或创建软件的衍生作品。
用户不得出租、租赁、出借、出售或转让软件的任何部分。
用户不得删除、修改或掩盖软件中的任何版权声明、商标或其他知识产权声明。
四、所有权
软件及其所有副本的所有权和知识产权均归软件提供商或其授权方所有。本协议不授予用户对软件的任何所有权权益。
五、免责声明
软件是在 “按现状” 的基础上提供的，不附带任何形式的保证，包括但不限于对适销性、特定用途适用性或不侵权的保证。
软件提供商不保证软件将满足用户的要求，也不保证软件的运行将不会中断或无错误。
六、责任限制
在任何情况下，软件提供商均不对用户因使用软件而遭受的任何间接、偶然、特殊、后果性或惩罚性损害负责，即使软件提供商已被告知此类损害的可能性。
软件提供商对用户因使用软件而遭受的任何损害的责任仅限于用户为软件支付的金额（如果有）。
七、终止
如果用户违反本协议的任何条款和条件，软件提供商有权终止本协议并收回用户对软件的使用许可。
在协议终止后，用户应立即停止使用软件，并销毁软件的所有副本。
八、法律适用和争议解决
本协议受 [法律适用地法律] 的管辖。
任何因本协议引起的争议应通过友好协商解决；如果协商不成，则应提交至 [争议解决机构] 进行仲裁。
九、其他条款
本协议构成用户与软件提供商之间关于软件的完整协议，并取代双方之前就软件达成的任何口头或书面协议。
如果本协议的任何条款被认定为无效或不可执行，则该条款应在法律允许的最大范围内执行，并且本协议的其余条款应继续完全有效。
请仔细阅读本协议，并在安装 Tigshop 电商软件之前表示你同意接受本协议的条款和条件。如果你不同意本协议的条款和条件，则不得安装、复制或使用软件。
EOF;

    returnJson(
        '',
        0,
        ['text' => $text,],
        false
    );

} elseif ($step == 2) {
    //环境检测
    //服务环境检测
    if (function_exists('saeAutoLoader') || isset($_SERVER['HTTP_BAE_ENV_APPID'])) {
        returnJson('对不起，当前环境不支持本系统，请使用独立服务或云主机！', 1);
    }
    //已安装过提示
    if (file_exists(APP_DIR . '/install.lock')) {
        returnJson('你已经安装过该系统，如果想重新安装，请先删除public目录下的 install.lock 文件，然后再安装。', 1);
    }
    if ('8.2.0' > phpversion()) {
        returnJson('您的php版本过低，不能安装本软件，需要php版本8.2+', 1);
    }
    //页面显示数据
    $data = [

    ];
    $data[] = [
        'name' => 'PHP版本',
        'code' => 'phpversion',
        'status' => true,
        'value' => phpversion()
    ];

    if (ini_get('memory_limit')) {
        $data[] = [
            'name' => 'memory_limit',
            'code' => 'memory_limit',
            'status' => true,
            'value' => ini_get('memory_limit')
        ];
    } else {
        $data[] = [
            'name' => 'memory_limit',
            'code' => 'memory_limit',
            'status' => false,
            'value' => '未设置'
        ];
    }

    if (ini_get('file_uploads')) {
        $data[] = [
            'name' => 'file_uploads',
            'code' => 'file_uploads',
            'status' => true,
            'value' => ini_get('upload_max_filesize')
        ];
    } else {
        $data[] = [
            'name' => 'file_uploads',
            'code' => 'file_uploads',
            'status' => false,
            'value' => '禁止上传'
        ];
    }

    if (function_exists('session_start')) {
        $data[] = [
            'name' => 'session_start',
            'code' => 'session_start',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'session_start',
            'code' => 'session_start',
            'status' => false,
            'value' => '关闭'
        ];
    }
    if (!ini_get('safe_mode')) {
        $data[] = [
            'name' => 'safe_mode',
            'code' => 'safe_mode',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'safe_mode',
            'code' => 'safe_mode',
            'status' => false,
            'value' => '关闭'
        ];
    }

    $tmp = function_exists('gd_info') ? gd_info() : array();
    if (!empty($tmp['GD Version'])) {
        $data[] = [
            'name' => 'GD库',
            'code' => 'GD',
            'status' => true,
            'value' => $tmp['GD Version']
        ];
    } else {
        $data[] = [
            'name' => 'GD库',
            'code' => 'GD',
            'status' => false,
            'value' => '关闭'
        ];
    }
    if (function_exists('mysqli_connect')) {
        $data[] = [
            'name' => 'mysqli_connect',
            'code' => 'mysqli_connect',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'mysqli_connect',
            'code' => 'mysqli_connect',
            'status' => false,
            'value' => '关闭'
        ];
    }

    if (function_exists('curl_init')) {
        $data[] = [
            'name' => 'curl_init',
            'code' => 'curl_init',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'curl_init',
            'code' => 'curl_init',
            'status' => false,
            'value' => '关闭'
        ];
    }
    if (function_exists('bcadd')) {
        $data[] = [
            'name' => 'BC-math扩展',
            'code' => 'bcadd',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'BC-math扩展',
            'code' => 'bcadd',
            'status' => false,
            'value' => '关闭'
        ];
    }
    if (function_exists('openssl_encrypt')) {
        $data[] = [
            'name' => 'openssl_encrypt',
            'code' => 'openssl_encrypt',
            'status' => true,
            'value' => '启用'
        ];
    } else {
        $data[] = [
            'name' => 'openssl_encrypt',
            'code' => 'openssl_encrypt',
            'status' => false,
            'value' => '关闭'
        ];
    }

    if (extension_loaded('redis')) {
        $data[] = [
            'name' => 'redis扩展',
            'code' => 'redis_ext',
            'status' => true,
            'value' => '已安装'
        ];
    } else {
        $data[] = [
            'name' => 'redis扩展',
            'code' => 'redis_ext',
            'status' => false,
            'value' => '未安装'
        ];
    }
    if (extension_loaded('json')) {
        $data[] = [
            'name' => 'json扩展',
            'code' => 'json_ext',
            'status' => true,
            'value' => '已安装'
        ];
    } else {
        $data[] = [
            'name' => 'json扩展',
            'code' => 'json_ext',
            'status' => false,
            'value' => '未安装'
        ];
    }
    if (extension_loaded('session')) {
        $data[] = [
            'name' => 'session扩展',
            'code' => 'session_ext',
            'status' => true,
            'value' => '已安装'
        ];
    } else {
        $data[] = [
            'name' => 'session扩展',
            'code' => 'session_ext',
            'status' => false,
            'value' => '未安装'
        ];
    }
    if (extension_loaded('PDO')) {
        $data[] = [
            'name' => 'PDO扩展',
            'code' => 'PDO_ext',
            'status' => true,
            'value' => '已安装'
        ];
    } else {
        $data[] = [
            'name' => 'PDO扩展',
            'code' => 'PDO_ext',
            'status' => false,
            'value' => '未安装'
        ];
    }
    if (extension_loaded('swoole')) {
        $data[] = [
            'name' => 'swoole扩展',
            'code' => 'swoole_ext',
            'status' => true,
            'value' => '已安装'
        ];
    } else {
        $data[] = [
            'name' => 'swoole扩展',
            'code' => 'swoole_ext',
            'status' => false,
            'value' => '未安装'
        ];
    }


    $folder = array(
        '/public',
        '/runtime',
    );
    foreach ($folder as $dir) {
        if (!is_file(APP_DIR . $dir)) {
            if (!is_dir(APP_DIR . $dir)) {
                dir_create(APP_DIR . $dir);
            }
        }

        if (!testwrite(APP_DIR . $dir) || !is_readable(APP_DIR . $dir)) {
            $data[] = [
                'name' => $dir . '目录权限',
                'code' => 'openssl_encrypt',
                'status' => false,
                'value' => '不可读写'
            ];
        } else {
            $data[] = [
                'name' => $dir . '目录权限',
                'code' => 'openssl_encrypt',
                'status' => true,
                'value' => '读写'
            ];
        }
    }
    returnJson(
        '',
        0,
        $data,
        false
    );


} elseif ($step == 3) {
    $paramStr = file_get_contents("php://input");
    if (empty($paramStr)) {
        returnJson(
            '参数错误',
            1,
            [],
            false,
            1
        );
    }
    $params = json_decode($paramStr, true);
    $returnMsg = [];
    $sql = $params['sql'] ?? 1;//1为纯净 2为demo
    $dbName = trim($params['dbname']) ?? '';
    $dbHost = trim($params['dbhost']) ?? '';
    $dbPort = $params['dbport'] ? $params['dbport'] : '3306';
    $dbName = strtolower(trim($params['dbname']));
    $dbUser = trim($params['dbuser']);
    $dbPwd = trim($params['dbpwd']);

    $admin = $params['account'] ?? 'admin';
    $password = $params['password'] ?? '';
    if(empty($password)) {
        returnJson('请设置管理员密码', 1, [], true , 1);
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

        //redis数据库信息
    $rbhost = $params['redishost'] ?? '127.0.0.1';
    $rbport = $params['redisport'] ?? 6379;
    $rbpw = $params['redispwd'] ?? '';
    $rbselect = $params['redisselect'] ?? 0;

    if (empty($dbHost)) {
        returnJson('请设置数据库地址', 1, [], true , 1);
    }

    if (empty($rbhost)) {
        returnJson('请设置Redis地址', 1, [], true , 1);
    }


    if ($dbPwd) {
        $conn = mysqli_init();
        mysqli_options($conn, MYSQLI_OPT_CONNECT_TIMEOUT, 2);
        try {
            @mysqli_real_connect($conn, $dbHost, $dbUser, $dbPwd, null, $dbPort);
        } catch (\Exception $e) {
            returnJson('数据库连接错误,请检查配置！', 1, [], true , 1);
        }

        if ($error = mysqli_connect_errno()) {
            if ($error == 2002) {
                returnJson('地址或端口错误', 1, [], true , 1);
            } else {
                if ($error == 1045) {
                    returnJson('用户名或密码错误', 1, [], true , 1);
                } else {
                    returnJson('链接失败', 1, [], true , 1);
                }
            }
        } else {
            if (mysqli_get_server_info($conn) < 5.1) {
                returnJson("数据库版本过低", 1, [], true , 1);
            }
            $result = mysqli_query($conn, "SELECT @@global.sql_mode");
            $result = $result->fetch_array();
            $version = mysqli_get_server_info($conn);
            if ($version < 5.5) {
                returnJson('版本不能低于5.5', 1, [], true , 1);
            }
            $result = mysqli_query($conn,
                "select count(SCHEMA_NAME) as c from information_schema.`SCHEMATA` where SCHEMA_NAME ='$dbName'");
            $result = $result->fetch_array();
            if ($result['c'] > 0) {
                //安装数据库
                if (isset($_POST['sql']) && $_POST['sql'] == 2) {
                    $sqlFileData = ($demoSqlFile);
                } else {
                    $sqlFileData = ($pureSqlFile);
                }
                $sql_file_data = file_get_contents($sqlFileData);
                $insert_sql = "INSERT INTO `admin_user` (`admin_id`, `username`, `admin_type`, `mobile`, `avatar`, `password`, `email`, `add_time`, `auth_list`, `user_id`, `suppliers_id`, `role_id`, `merchant_id`, `parent_id`, `menu_tag`, `order_export`, `extra`, `shop_id`, `is_using`, `initial_password`) VALUES (1, 'admin'";
                //将admin 和 password 替换
                $insert_install_sql = "INSERT INTO `admin_user` (`admin_id`, `username`, `admin_type`, `mobile`, `avatar`, `password`, `email`, `add_time`, `auth_list`, `user_id`, `suppliers_id`, `role_id`, `merchant_id`, `parent_id`, `menu_tag`, `order_export`, `extra`, `shop_id`, `is_using`, `initial_password`) VALUES (1,'" .$admin ."'";
                $sql_file_data_new = str_replace($insert_sql , $insert_install_sql, $sql_file_data);
                $password_old = '$2y$10$KW/snmOoevmgubZFY9eOFeW3zsxQcJMnDmWEuDboVLm3.5VkG5BL6';
                $sql_file_data_new = str_replace($password_old, $password, $sql_file_data_new);
                $sql_file_data_new = str_replace($insert_sql , $insert_install_sql, $sql_file_data_new);

                $sql = "use " . $dbName;
                $ret = mysqli_query($conn, $sql);
                $ret = mysqli_multi_query($conn, $sql_file_data_new);
                if ($ret) {
                    $message = '';
                } else {
                    $err = mysqli_error($conn);
                    $message = '数据导入失败。原因：' . $err;
                    returnJson($message, 1, [], true , 1);
                }
                mysqli_close($conn);
                $returnMsg[] = '数据库已存在';
            } else {
                returnJson('数据库' . $dbName . '不存在，请先创建数据库!', 1, [], true , 1);
//                if (!mysqli_select_db($conn, $dbName)) {
//                    //创建数据时同时设置编码
//                    if (!mysqli_query($conn,
//                        "CREATE DATABASE IF NOT EXISTS `" . $dbName . "` DEFAULT CHARACTER SET utf8mb4;")) {
//                        returnJson('无权限创建数据库', 0);
//                    } else {
//                        mysqli_close($conn);
//                        $returnMsg[] = '数据库配置成功';
//                    }
//                } else {
//                    mysqli_close($conn);
//                    $returnMsg[] = '数据库配置成功';
//                }
            }
        }
    }
    if ($rbhost) {

        try {
            if (!class_exists('redis')) {
                returnJson('redis连接失败', 1, [], true , 1);
            }
            $redis = new Redis();
            if (!$redis) {
                returnJson('redis连接失败', 1, [], true , 1);
            }
            $redis->connect($rbhost, $rbport);
            if ($rbpw) {
                $redis->auth($rbpw);
            }
            if ($rbselect) {
                $redis->select($rbselect);
            }
            $res = $redis->set('install', 1, 10);
            if ($res) {
                $returnMsg[] = 'redis连接成功';
            } else {
                returnJson('redis连接失败', 1, [], true , 1);
            }
        } catch (Throwable $e) {
            returnJson('redis连接失败', 1, [], true , 1);
        }
    }

    $config = file_get_contents(APP_DIR . '/.example.env');

    //替换配置
    $config = str_replace("HOST = 127.0.0.1", 'HOST = ' .$dbHost, $config);
    $config = str_replace("NAME = test", 'NAME = ' . $dbName , $config);
    $config = str_replace('USER = username', 'USER = '. $dbUser, $config);
    $config = str_replace('PASS = password', 'PASS = '. $dbPwd, $config);
    $config = str_replace('PORT = 3306', 'PORT = '. $dbPort, $config);
    $config = str_replace('HOST=127.0.0.1', 'HOST=' . $rbhost, $config);
    $config = str_replace('PORT=6379', 'PORT=' . $rbport, $config);
    $config = str_replace('PASSWORD =', 'PASSWORD =' .$rbpw , $config);
    $config = str_replace('SELECT = 1', 'SELECT = ' . $rbselect, $config);

    @chmod(APP_DIR . '/.env', 0777); //数据库配置文件的地址
    try {
        file_put_contents(APP_DIR . '/.env', $config); //数据库配置文件的地址
    } catch (\Exception $e) {

    }

    installlog();
    returnJson('安装成功');
}
//检测项目是否已安装


//写入安装信息
function installlog()
{
    $time = date('Y-m-d H:i:s');
    $str = "此文件请勿删除！！！，安装时间：" . $time;
    @file_put_contents(APP_DIR . "/install.lock", $str);
}

//判断权限
function testwrite($d)
{
    if (is_file($d)) {
        if (is_writeable($d)) {
            return true;
        }
        return false;

    } else {
        $tfile = "tig.txt";
        $fp = @fopen($d . "/" . $tfile, "w");
        if (!$fp) {
            return false;
        }
        fclose($fp);
        $rs = @unlink($d . "/" . $tfile);
        if ($rs) {
            return true;
        }
        return false;
    }

}

function sql_split($sql, $tablepre = '')
{

    $sql = str_replace("\r", "\n", $sql);
    $ret = [];
    $num = 0;
    $queriesarray = explode(";\n", trim($sql));
    unset($sql);
    foreach ($queriesarray as $query) {
        $ret[$num] = '';
        $queries = explode("\n", trim($query));
        $queries = array_filter($queries);
        foreach ($queries as $query) {
            $str1 = substr($query, 0, 1);
            if ($str1 != '#' && $str1 != '-') {
                $ret[$num] .= $query;
            }
        }
        $num++;
    }
    return $ret;
}

function _dir_path($path)
{
    $path = str_replace('\\', '/', $path);
    if (substr($path, -1) != '/') {
        $path = $path . '/';
    }
    return $path;
}

// 获取客户端IP地址
function get_client_ip()
{
    static $ip = null;
    if ($ip !== null) {
        return $ip;
    }
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos) {
            unset($arr[$pos]);
        }
        $ip = trim($arr[0]);
    } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
    return $ip;
}

function dir_create($path, $mode = 0777)
{
    if (is_dir($path)) {
        return true;
    }
    $ftp_enable = 0;
    $path = dir_path($path);
    $temp = explode('/', $path);
    $cur_dir = '';
    $max = count($temp) - 1;
    for ($i = 0; $i < $max; $i++) {
        $cur_dir .= $temp[$i] . '/';
        if (@is_dir($cur_dir)) {
            continue;
        }
        @mkdir($cur_dir, 0777, true);
        @chmod($cur_dir, 0777);
    }
    return is_dir($path);
}

function dir_path($path)
{
    $path = str_replace('\\', '/', $path);
    if (substr($path, -1) != '/') {
        $path = $path . '/';
    }
    return $path;
}

function sp_password($pw, $pre)
{
    $decor = md5($pre);
    $mi = md5($pw);
    return substr($decor, 0, 12) . $mi . substr($decor, -4, 4);
}

function sp_random_string($len = 8)
{
    $chars = array(
        "a",
        "b",
        "c",
        "d",
        "e",
        "f",
        "g",
        "h",
        "i",
        "j",
        "k",
        "l",
        "m",
        "n",
        "o",
        "p",
        "q",
        "r",
        "s",
        "t",
        "u",
        "v",
        "w",
        "x",
        "y",
        "z",
        "A",
        "B",
        "C",
        "D",
        "E",
        "F",
        "G",
        "H",
        "I",
        "J",
        "K",
        "L",
        "M",
        "N",
        "O",
        "P",
        "Q",
        "R",
        "S",
        "T",
        "U",
        "V",
        "W",
        "X",
        "Y",
        "Z",
        "0",
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9"
    );
    $charsLen = count($chars) - 1;
    shuffle($chars);    // 将数组打乱
    $output = "";
    for ($i = 0; $i < $len; $i++) {
        $output .= $chars[mt_rand(0, $charsLen)];
    }
    return $output;
}

// 递归删除文件夹
function delFile($dir, $file_type = '')
{
    if (is_dir($dir)) {
        $files = scandir($dir);
        //打开目录 //列出目录中的所有文件并去掉 . 和 ..
        foreach ($files as $filename) {
            if ($filename != '.' && $filename != '..') {
                if (!is_dir($dir . '/' . $filename)) {
                    if (empty($file_type)) {
                        unlink($dir . '/' . $filename);
                    } else {
                        if (is_array($file_type)) {
                            //正则匹配指定文件
                            if (preg_match($file_type[0], $filename)) {
                                unlink($dir . '/' . $filename);
                            }
                        } else {
                            //指定包含某些字符串的文件
                            if (false != stristr($filename, $file_type)) {
                                unlink($dir . '/' . $filename);
                            }
                        }
                    }
                } else {
                    delFile($dir . '/' . $filename);
                    rmdir($dir . '/' . $filename);
                }
            }
        }
    } else {
        if (file_exists($dir)) {
            unlink($dir);
        }
    }
}


function returnJson($message = '', $code = 0, $data = [] , $need_errcode = false, $errcode = 0)
{
    $res['message'] = $message;
    $res = $data;
    if($need_errcode) {
        $res['errcode'] = $errcode;
    }
    exit(json_encode([
        'code' => $code,
        'data' => $res,
        'message' => $message
    ]));
}

function getNginxVersion(){
    $nginxVersion = '';
    $headers = getallheaders();
    if (isset($headers['Server'])) {
        // 获取 'Server' 头的值
        $serverHeader = $headers['Server'];
        if (preg_match('/nginx\/(\d+\.\d+\.\d+)/i', $serverHeader, $matches)) {
            $nginxVersion = $matches[1];
        }
    }
    return $nginxVersion;
}

?>
