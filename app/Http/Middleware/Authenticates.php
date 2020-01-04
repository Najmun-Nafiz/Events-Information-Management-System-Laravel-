<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticates as Middleware;


class Authenticates extends Middleware
{
   

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('admin.login');
        }
    }
}
