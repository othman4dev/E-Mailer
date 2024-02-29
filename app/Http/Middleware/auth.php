<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Firebase\JWT\Key;
use Firebase\JWT\JWT;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->cookie('token')) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        } else {
            $token = $request->cookie('token');
            $data = JWT::decode($token, new Key($_ENV['JWT_SECRET'], 'HS256'));
            $user = User::find($data->sub);
            if (!$user) {
                return response()->json([
                    'message' => 'Unauthorized'
                ], 401);
            } else {
                return $next($request);
            }
        }
    }
}
