# Swoole IDE Helper

[![Twitter](https://badgen.net/badge/icon/twitter?icon=twitter&label)](https://twitter.com/phpswoole)
[![Discord](https://badgen.net/badge/icon/discord?icon=discord&label)](https://discord.swoole.dev)
[![Latest Stable Version](https://poser.pugx.org/swoole/ide-helper/v/stable.svg)](https://packagist.org/packages/swoole/ide-helper)
[![License](https://poser.pugx.org/swoole/ide-helper/license)](LICENSE)

This package contains IDE help files for [Swoole](https://github.com/swoole/swoole-src). You may use it in your IDE to provide accurate autocompletion. 

## Install

You can add this package to your project using [Composer](https://getcomposer.org):

```bash
composer require swoole/ide-helper:@dev
# or you can install a specific version, like:
composer require swoole/ide-helper:~4.4.7
```

It's better to install this package on only development systems by adding the `--dev` flag to your Composer commands:

```bash
composer require --dev swoole/ide-helper:@dev
# or you can install a specific version, like:
composer require --dev swoole/ide-helper:~4.4.7
```

## Notes

There are two types of worker processes in use when starting a Swoole server:

1. `event worker`. All requests (HTTP, WebSocket, TCP, UDP, etc.) are handled by this type of processes. It supports coroutine by default; many I/O operations can run asynchronously in it.
2. `task worker`. This type of processes was introduced to handle blocking I/O operations in PHP. Ideally, it should always work synchronously, although it also supports coroutine and allows asynchronous processing (since Swoole v4.2.12+).
