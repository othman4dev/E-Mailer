<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        $user = User::where('email', request('email'))->first();
        if (!$user || !password_verify(request('password'), $user->password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        } else {
            $payload = [
                "sub" => $user->id,
            ];
            $jwt = JWT::encode($payload, $_ENV['JWT_SECRET'], $_ENV['JWT_ALGO']);
            $cookie = cookie('token', $jwt, 60);
            return redirect()->to('/')->withCookie($cookie);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = password_hash($request->password, PASSWORD_DEFAULT);
        $user->save();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
