<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminiMiddleware
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
                "status"=> "forbidden",
                "message"=> "You are not the administrator"
            ],403);
        }
        return $next($request);
    }
}
