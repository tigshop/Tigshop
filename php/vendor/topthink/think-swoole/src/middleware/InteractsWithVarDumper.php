<?php

namespace think\swoole\middleware;

use Closure;
use think\Request;
use think\Response;

/**
 * @deprecated 废弃 改用 topthink/think-dumper
 */
class InteractsWithVarDumper
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return Response
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
