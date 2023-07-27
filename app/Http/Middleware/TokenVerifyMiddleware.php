<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerifyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token=$request->header('token');
        $response= JWTToken::verifyToken($token);
        if($response==="unauthorized")
        {
            return response()->json(['status'=>'failed',
            'message'=>'Unauthorized'],401);
        }
        else{
                $request->headers->set('email',$response);
            return $next($request);
        }
    }
}
