<?php
define('STUB_DIR', realpath(__DIR__ . '/stub'));

$app = new \think\App(STUB_DIR);

$app->initialize();
