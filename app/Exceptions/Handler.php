<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthorazed.'], 401);
        }

        if ($request->is('client') || $request->is('client/*')) {
            return redirect()->guest('/');
        }
        
        return redirect()->guest(route('/'));
    }
}

