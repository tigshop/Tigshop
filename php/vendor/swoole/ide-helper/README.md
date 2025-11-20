# Swoole IDE Helper

[![Twitter](https://badgen.net/badge/icon/twitter?icon=twitter&label)](https://twitter.com/phpswoole)
[![Discord](https://badgen.net/badge/icon/discord?icon=discord&label)](https://discord.swoole.dev)
[![Latest Stable Version](https://poser.pugx.org/swoole/ide-helper/v/stable.svg)](https://packagist.org/packages/swoole/ide-helper)
[![License](https://poser.pugx.org/swoole/ide-helper/license)](LICENSE)

This package contains IDE help files for [Swoole](https://github.com/swoole/swoole-src). You may use it in your IDE to provide accurate autocompletion. 

## Install

You can add this package to your project using [Composer](https://getcomposer.org):

```bash
composer require swoole/ide-helper:~5.0.0
# or
composer require --dev swoole/ide-helper:~5.0.0
```

To use the latest stubs from the `master` branch:

```bash
composer require swoole/ide-helper:@dev
# or
composer require --dev swoole/ide-helper:@dev
```

## PHP Configuration Settings

* `swoole.display_errors`: Boolean. Default `On`. Display/hide error information from Swoole.
* `swoole.enable_coroutine`: Boolean. Default `On`. Turn on/off coroutine support.
* `swoole.enable_library`: Boolean. Default `On`. Load the source code from [Swoole Library](https://github.com/swoole/library) or not.
* `swoole.enable_preemptive_scheduler`: Boolean. Default `Off`. Enable preemptive scheduler or not. To understand how it works, please check examples under section "CPU-intensive job scheduling" of repository [deminy/swoole-by-examples](https://github.com/deminy/swoole-by-examples).
* `swoole.unixsock_buffer_size`: Integer (in bytes). By default, it's 256 KiB on Macintosh or FreeBSD, otherwise 8 MiB. The total buffer sizes for the socket connections between the master process and the worker processes in Swoole.
* `swoole.use_shortname`: Boolean. Default `On`. Support short names or not. Short names are all the aliases listed in file [src/swoole/shortnames.php](src/swoole/shortnames.php).

All the directives can be set anywhere except `swoole.use_shortname`, which can only be set in `php.ini` files.
