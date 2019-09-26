<?php

namespace App\Http\Middleware;

use Closure;

class OperationLog
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $input = $request->all();
        $path = $request->path();
        $method = $request->method();
        $ip = $request->ip();
        $username = 'test';
        self::writeLog($username, $input, $path, $method, $ip);
        return $next($request);
    }


    public static function writeLog($username, $input, $path, $method, $ip){
        $log = new \App\OperationLog();
        $log->setAttribute('username', $username);
        $log->setAttribute('path', $path);
        $log->setAttribute('method', $method);
        $log->setAttribute('ip', $ip);
        $log->setAttribute('input', json_encode($input, JSON_UNESCAPED_UNICODE));
        $log->save();
    }


}
