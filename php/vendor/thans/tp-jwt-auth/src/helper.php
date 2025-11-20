<?php

use thans\jwt\command\SecretCommand;
use thans\jwt\provider\JWT as JWTProvider;
use think\Console;
use think\App;

if (strpos(App::VERSION, '5.') === 0) {
    Console::addDefaultCommands([
        SecretCommand::class
    ]);
    (new JWTProvider(app('request')))->init();
}
