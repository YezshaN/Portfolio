<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {   
        $age = session('age', 0);

        if ($age <= 15) {
            return redirect()->route('accessDenied');
        }

        return $next($request);
    }
}
