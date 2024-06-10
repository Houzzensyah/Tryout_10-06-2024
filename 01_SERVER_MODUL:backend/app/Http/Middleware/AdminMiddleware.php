<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!$request->user() || !$request->user()->tokenCan('role:admin')){
            return response()->json([
                'status' => 'invalid',
            'message' => 'You are not the administrator'
            ],403);
        }else {
            return $next($request);
        }
    }
}
