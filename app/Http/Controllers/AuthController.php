<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('user')->attempt($credentials)) {
            return response()->json([
                'message' => 'User logged in successfully',
                'redirect' => route('user.dashboard'),
                'role' => 'user',
            ], 200);
        } elseif (Auth::guard('distributor')->attempt($credentials)) {
            return response()->json([
                'message' => 'Distributor logged in successfully',
                'redirect' => route('distributor.dashboard'),
                'role' => 'distributor'
            ], 200);
        }

        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
