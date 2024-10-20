<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogRequest
{
    public function handle(Request $request, Closure $next)
    {
        $logFile = storage_path('logs/log.txt');

        $logData = "[" . now() . "] " . $request->method() . " " . $request->fullUrl() . "\n";
        file_put_contents($logFile, $logData, FILE_APPEND);

        return $next($request);
    }
}
