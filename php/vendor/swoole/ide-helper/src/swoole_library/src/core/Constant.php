<?php
/**
 * This file is part of Swoole.
 *
 * @link     https://www.swoole.com
 * @contact  team@swoole.com
 * @license  https://github.com/swoole/library/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Swoole;

class Constant
{
    /* {{{ EVENT */
    public const EVENT_START = 'start';

    public const EVENT_BEFORE_SHUTDOWN = 'beforeShutdown';

    public const EVENT_SHUTDOWN = 'shutdown';

    public const EVENT_WORKER_START = 'workerStart';

    public const EVENT_WORKER_STOP = 'workerStop';

    public const EVENT_BEFORE_RELOAD = 'beforeReload';

    public const EVENT_AFTER_RELOAD = 'afterReload';

    public const EVENT_TASK = 'task';

    public const EVENT_FINISH = 'finish';

    public const EVENT_WORKER_EXIT = 'workerExit';

    public const EVENT_WORKER_ERROR = 'workerError';

    public const EVENT_MANAGER_START = 'managerStart';

    public const EVENT_MANAGER_STOP = 'managerStop';

    public const EVENT_PIPE_MESSAGE = 'pipeMessage';

    public const EVENT_CONNECT = 'connect';

    public const EVENT_RECEIVE = 'receive';

    public const EVENT_CLOSE = 'close';

    public const EVENT_PACKET = 'packet';

    public const EVENT_BUFFER_FULL = 'bufferFull';

    public const EVENT_BUFFER_EMPTY = 'bufferEmpty';

    public const EVENT_REQUEST = 'request';

    public const EVENT_HANDSHAKE = 'handshake';

    public const EVENT_OPEN = 'open';

    public const EVENT_MESSAGE = 'message';

    public const EVENT_DISCONNECT = 'disconnect';

    /* }}} EVENT */

    public const EVENT_ERROR = 'error';

    /* {{{ OPTION */
    public const OPTION_DEBUG_MODE = 'debug_mode';

    public const OPTION_TRACE_FLAGS = 'trace_flags';

    public const OPTION_LOG_FILE = 'log_file';

    public const OPTION_LOG_LEVEL = 'log_level';

    public const OPTION_LOG_DATE_FORMAT = 'log_date_format';

    public const OPTION_LOG_DATE_WITH_MICROSECONDS = 'log_date_with_microseconds';

    public const OPTION_LOG_ROTATION = 'log_rotation';

    public const OPTION_DISPLAY_ERRORS = 'display_errors';

    public const OPTION_DNS_SERVER = 'dns_server';

    public const OPTION_SOCKET_DNS_TIMEOUT = 'socket_dns_timeout';

    public const OPTION_SOCKET_CONNECT_TIMEOUT = 'socket_connect_timeout';

    public const OPTION_SOCKET_WRITE_TIMEOUT = 'socket_write_timeout';

    public const OPTION_SOCKET_SEND_TIMEOUT = 'socket_send_timeout';

    public const OPTION_SOCKET_READ_TIMEOUT = 'socket_read_timeout';

    public const OPTION_SOCKET_RECV_TIMEOUT = 'socket_recv_timeout';

    public const OPTION_SOCKET_BUFFER_SIZE = 'socket_buffer_size';

    public const OPTION_SOCKET_TIMEOUT = 'socket_timeout';

    public const OPTION_HTTP2_HEADER_TABLE_SIZE = 'http2_header_table_size';

    public const OPTION_HTTP2_ENABLE_PUSH = 'http2_enable_push';

    public const OPTION_HTTP2_MAX_CONCURRENT_STREAMS = 'http2_max_concurrent_streams';

    public const OPTION_HTTP2_INIT_WINDOW_SIZE = 'http2_init_window_size';

    public const OPTION_HTTP2_MAX_FRAME_SIZE = 'http2_max_frame_size';

    public const OPTION_HTTP2_MAX_HEADER_LIST_SIZE = 'http2_max_header_list_size';

    public const OPTION_AIO_CORE_WORKER_NUM = 'aio_core_worker_num';

    public const OPTION_AIO_WORKER_NUM = 'aio_worker_num';

    public const OPTION_AIO_MAX_WAIT_TIME = 'aio_max_wait_time';

    public const OPTION_AIO_MAX_IDLE_TIME = 'aio_max_idle_time';

    public const OPTION_ENABLE_SIGNALFD = 'enable_signalfd';

    public const OPTION_WAIT_SIGNAL = 'wait_signal';

    public const OPTION_DNS_CACHE_REFRESH_TIME = 'dns_cache_refresh_time';

    public const OPTION_THREAD_NUM = 'thread_num';

    public const OPTION_MIN_THREAD_NUM = 'min_thread_num';

    public const OPTION_MAX_THREAD_NUM = 'max_thread_num';

    public const OPTION_SOCKET_DONTWAIT = 'socket_dontwait';

    public const OPTION_DNS_LOOKUP_RANDOM = 'dns_lookup_random';

    public const OPTION_USE_ASYNC_RESOLVER = 'use_async_resolver';

    public const OPTION_ENABLE_COROUTINE = 'enable_coroutine';

    public const OPTION_SSL_PROTOCOLS = 'ssl_protocols';

    public const OPTION_SSL_COMPRESS = 'ssl_compress';

    public const OPTION_SSL_CERT_FILE = 'ssl_cert_file';

    public const OPTION_SSL_KEY_FILE = 'ssl_key_file';

    public const OPTION_SSL_PASSPHRASE = 'ssl_passphrase';

    public const OPTION_SSL_HOST_NAME = 'ssl_host_name';

    public const OPTION_SSL_VERIFY_PEER = 'ssl_verify_peer';

    public const OPTION_SSL_ALLOW_SELF_SIGNED = 'ssl_allow_self_signed';

    public const OPTION_SSL_CAFILE = 'ssl_cafile';

    public const OPTION_SSL_CAPATH = 'ssl_capath';

    public const OPTION_SSL_VERIFY_DEPTH = 'ssl_verify_depth';

    public const OPTION_SSL_CIPHERS = 'ssl_ciphers';

    public const OPTION_OPEN_EOF_CHECK = 'open_eof_check';

    public const OPTION_OPEN_EOF_SPLIT = 'open_eof_split';

    public const OPTION_PACKAGE_EOF = 'package_eof';

    public const OPTION_OPEN_MQTT_PROTOCOL = 'open_mqtt_protocol';

    public const OPTION_OPEN_LENGTH_CHECK = 'open_length_check';

    public const OPTION_PACKAGE_LENGTH_TYPE = 'package_length_type';

    public const OPTION_PACKAGE_LENGTH_OFFSET = 'package_length_offset';

    public const OPTION_PACKAGE_BODY_OFFSET = 'package_body_offset';

    public const OPTION_PACKAGE_LENGTH_FUNC = 'package_length_func';

    public const OPTION_PACKAGE_MAX_LENGTH = 'package_max_length';

    public const OPTION_BUFFER_HIGH_WATERMARK = 'buffer_high_watermark';

    public const OPTION_BUFFER_LOW_WATERMARK = 'buffer_low_watermark';

    public const OPTION_BIND_PORT = 'bind_port';

    public const OPTION_BIND_ADDRESS = 'bind_address';

    public const OPTION_OPEN_TCP_NODELAY = 'open_tcp_nodelay';

    public const OPTION_SOCKS5_HOST = 'socks5_host';

    public const OPTION_SOCKS5_PORT = 'socks5_port';

    public const OPTION_SOCKS5_USERNAME = 'socks5_username';

    public const OPTION_SOCKS5_PASSWORD = 'socks5_password';

    public const OPTION_HTTP_PROXY_HOST = 'http_proxy_host';

    public const OPTION_HTTP_PROXY_PORT = 'http_proxy_port';

    public const OPTION_HTTP_PROXY_USERNAME = 'http_proxy_username';

    public const OPTION_HTTP_PROXY_USER = 'http_proxy_user';

    public const OPTION_HTTP_PROXY_PASSWORD = 'http_proxy_password';

    public const OPTION_TIMEOUT = 'timeout';

    public const OPTION_CONNECT_TIMEOUT = 'connect_timeout';

    public const OPTION_READ_TIMEOUT = 'read_timeout';

    public const OPTION_WRITE_TIMEOUT = 'write_timeout';

    public const OPTION_SSL_DISABLE_COMPRESSION = 'ssl_disable_compression';

    public const OPTION_SSL_ECDH_CURVE = 'ssl_ecdh_curve';

    public const OPTION_SSL_GREASE = 'ssl_grease';

    public const OPTION_MAX_CORO_NUM = 'max_coro_num';

    public const OPTION_MAX_COROUTINE = 'max_coroutine';

    public const OPTION_ENABLE_DEADLOCK_CHECK = 'enable_deadlock_check';

    public const OPTION_HOOK_FLAGS = 'hook_flags';

    public const OPTION_ENABLE_PREEMPTIVE_SCHEDULER = 'enable_preemptive_scheduler';

    public const OPTION_C_STACK_SIZE = 'c_stack_size';

    public const OPTION_STACK_SIZE = 'stack_size';

    public const OPTION_DNS_CACHE_EXPIRE = 'dns_cache_expire';

    public const OPTION_DNS_CACHE_CAPACITY = 'dns_cache_capacity';

    public const OPTION_MAX_CONCURRENCY = 'max_concurrency';

    public const OPTION_RECONNECT = 'reconnect';

    public const OPTION_DEFER = 'defer';

    public const OPTION_LOWERCASE_HEADER = 'lowercase_header';

    public const OPTION_KEEP_ALIVE = 'keep_alive';

    public const OPTION_WEBSOCKET_MASK = 'websocket_mask';

    public const OPTION_HTTP_COMPRESSION = 'http_compression';

    public const OPTION_BODY_DECOMPRESSION = 'body_decompression';

    public const OPTION_WEBSOCKET_COMPRESSION = 'websocket_compression';

    public const OPTION_HTTP_PARSE_COOKIE = 'http_parse_cookie';

    public const OPTION_HTTP_PARSE_POST = 'http_parse_post';

    public const OPTION_HTTP_PARSE_FILES = 'http_parse_files';

    public const OPTION_HTTP_COMPRESSION_LEVEL = 'http_compression_level';

    public const OPTION_HTTP_GZIP_LEVEL = 'http_gzip_level';

    public const OPTION_COMPRESSION_MIN_LENGTH = 'compression_min_length';

    public const OPTION_UPLOAD_TMP_DIR = 'upload_tmp_dir';

    public const OPTION_HOST = 'host';

    public const OPTION_PORT = 'port';

    public const OPTION_SSL = 'ssl';

    public const OPTION_USER = 'user';

    public const OPTION_PASSWORD = 'password';

    public const OPTION_DATABASE = 'database';

    public const OPTION_CHARSET = 'charset';

    public const OPTION_STRICT_TYPE = 'strict_type';

    public const OPTION_FETCH_MODE = 'fetch_mode';

    public const OPTION_SERIALIZE = 'serialize';

    public const OPTION_COMPATIBILITY_MODE = 'compatibility_mode';

    public const OPTION_CHROOT = 'chroot';

    public const OPTION_GROUP = 'group';

    public const OPTION_DAEMONIZE = 'daemonize';

    public const OPTION_PID_FILE = 'pid_file';

    public const OPTION_REACTOR_NUM = 'reactor_num';

    public const OPTION_SINGLE_THREAD = 'single_thread';

    public const OPTION_WORKER_NUM = 'worker_num';

    public const OPTION_MAX_WAIT_TIME = 'max_wait_time';

    public const OPTION_MAX_QUEUED_BYTES = 'max_queued_bytes';

    public const OPTION_SEND_TIMEOUT = 'send_timeout';

    public const OPTION_DISPATCH_MODE = 'dispatch_mode';

    public const OPTION_SEND_YIELD = 'send_yield';

    public const OPTION_DISPATCH_FUNC = 'dispatch_func';

    public const OPTION_DISCARD_TIMEOUT_REQUEST = 'discard_timeout_request';

    public const OPTION_ENABLE_UNSAFE_EVENT = 'enable_unsafe_event';

    public const OPTION_ENABLE_DELAY_RECEIVE = 'enable_delay_receive';

    public const OPTION_ENABLE_REUSE_PORT = 'enable_reuse_port';

    public const OPTION_TASK_USE_OBJECT = 'task_use_object';

    public const OPTION_TASK_OBJECT = 'task_object';

    public const OPTION_EVENT_OBJECT = 'event_object';

    public const OPTION_TASK_ENABLE_COROUTINE = 'task_enable_coroutine';

    public const OPTION_TASK_WORKER_NUM = 'task_worker_num';

    public const OPTION_TASK_IPC_MODE = 'task_ipc_mode';

    public const OPTION_TASK_TMPDIR = 'task_tmpdir';

    public const OPTION_TASK_MAX_REQUEST = 'task_max_request';

    public const OPTION_TASK_MAX_REQUEST_GRACE = 'task_max_request_grace';

    public const OPTION_MAX_CONNECTION = 'max_connection';

    public const OPTION_MAX_CONN = 'max_conn';

    public const OPTION_START_SESSION_ID = 'start_session_id';

    public const OPTION_HEARTBEAT_CHECK_INTERVAL = 'heartbeat_check_interval';

    public const OPTION_HEARTBEAT_IDLE_TIME = 'heartbeat_idle_time';

    public const OPTION_MAX_REQUEST = 'max_request';

    public const OPTION_MAX_REQUEST_GRACE = 'max_request_grace';

    public const OPTION_RELOAD_ASYNC = 'reload_async';

    public const OPTION_OPEN_CPU_AFFINITY = 'open_cpu_affinity';

    public const OPTION_CPU_AFFINITY_IGNORE = 'cpu_affinity_ignore';

    public const OPTION_ENABLE_STATIC_HANDLER = 'enable_static_handler';

    public const OPTION_DOCUMENT_ROOT = 'document_root';

    public const OPTION_HTTP_AUTOINDEX = 'http_autoindex';

    public const OPTION_HTTP_INDEX_FILES = 'http_index_files';

    public const OPTION_STATIC_HANDLER_LOCATIONS = 'static_handler_locations';

    public const OPTION_INPUT_BUFFER_SIZE = 'input_buffer_size';

    public const OPTION_BUFFER_INPUT_SIZE = 'buffer_input_size';

    public const OPTION_OUTPUT_BUFFER_SIZE = 'output_buffer_size';

    public const OPTION_BUFFER_OUTPUT_SIZE = 'buffer_output_size';

    public const OPTION_MESSAGE_QUEUE_KEY = 'message_queue_key';

    public const OPTION_BACKLOG = 'backlog';

    public const OPTION_KERNEL_SOCKET_RECV_BUFFER_SIZE = 'kernel_socket_recv_buffer_size';

    public const OPTION_KERNEL_SOCKET_SEND_BUFFER_SIZE = 'kernel_socket_send_buffer_size';

    public const OPTION_TCP_DEFER_ACCEPT = 'tcp_defer_accept';

    public const OPTION_OPEN_TCP_KEEPALIVE = 'open_tcp_keepalive';

    public const OPTION_OPEN_HTTP_PROTOCOL = 'open_http_protocol';

    public const OPTION_OPEN_WEBSOCKET_PROTOCOL = 'open_websocket_protocol';

    public const OPTION_WEBSOCKET_SUBPROTOCOL = 'websocket_subprotocol';

    public const OPTION_OPEN_WEBSOCKET_CLOSE_FRAME = 'open_websocket_close_frame';

    public const OPTION_OPEN_WEBSOCKET_PING_FRAME = 'open_websocket_ping_frame';

    public const OPTION_OPEN_WEBSOCKET_PONG_FRAME = 'open_websocket_pong_frame';

    public const OPTION_OPEN_HTTP2_PROTOCOL = 'open_http2_protocol';

    public const OPTION_OPEN_REDIS_PROTOCOL = 'open_redis_protocol';

    public const OPTION_MAX_IDLE_TIME = 'max_idle_time';

    public const OPTION_TCP_KEEPIDLE = 'tcp_keepidle';

    public const OPTION_TCP_KEEPINTERVAL = 'tcp_keepinterval';

    public const OPTION_TCP_KEEPCOUNT = 'tcp_keepcount';

    public const OPTION_TCP_USER_TIMEOUT = 'tcp_user_timeout';

    public const OPTION_TCP_FASTOPEN = 'tcp_fastopen';

    public const OPTION_PACKAGE_BODY_START = 'package_body_start';

    public const OPTION_SSL_CLIENT_CERT_FILE = 'ssl_client_cert_file';

    public const OPTION_SSL_PREFER_SERVER_CIPHERS = 'ssl_prefer_server_ciphers';

    public const OPTION_SSL_DHPARAM = 'ssl_dhparam';

    public const OPTION_SSL_SNI_CERTS = 'ssl_sni_certs';

    public const OPTION_OPEN_SSL = 'open_ssl';

    public const OPTION_OPEN_FASTCGI_PROTOCOL = 'open_fastcgi_protocol';

    public const OPTION_EXIT_CONDITION = 'exit_condition';

    public const OPTION_DEADLOCK_CHECK_DISABLE_TRACE = 'deadlock_check_disable_trace';

    public const OPTION_DEADLOCK_CHECK_LIMIT = 'deadlock_check_limit';

    public const OPTION_DEADLOCK_CHECK_DEPTH = 'deadlock_check_depth';

    public const OPTION_STATS_FILE = 'stats_file';

    public const OPTION_STATS_TIMER_INTERVAL = 'stats_timer_interval';

    public const OPTION_ADMIN_SERVER = 'admin_server';

    /* }}} OPTION */

    public const OPTION_HTTP_CLIENT_DRIVER = 'http_client_driver';
}
