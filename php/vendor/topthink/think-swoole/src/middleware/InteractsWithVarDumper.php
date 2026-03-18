<?php

namespace think\swoole\middleware;

use Closure;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\VarDumper;
use think\Request;
use think\Response;

class InteractsWithVarDumper
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle($request, Closure $next)
    {
        if (class_exists(VarDumper::class)) {
            $cloner = new VarCloner();
            $dumper = new HtmlDumper();

            $prevHandler = VarDumper::setHandler(function ($var) use ($dumper, $cloner) {
                $dumper->dump($cloner->cloneVar($var));
            });

            /** @var Response $response */
            $response = $next($request);

            VarDumper::setHandler($prevHandler);
            return $response;
        }
        return $next($request);
    }
}
