<?php


namespace thans\jwt;

use thans\jwt\command\SecretCommand;
use thans\jwt\middleware\InjectJwt;
use thans\jwt\provider\JWT as JWTProvider;

class Service extends \think\Service
{
    public function boot()
    {
        $this->commands(SecretCommand::class);
        $this->app->middleware->add(InjectJwt::class);
    }
}
