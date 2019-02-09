<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;

class UsersController extends Controller
{
    public function create(Request $request) {
        $user = new User;
        $user->user_id = $request->input('user_id');
        $user->password = $request->input('password');
        $user->save();

        return response()->json('OK', 200);
    }

    public function login(Request $request)
    {
        try {
            $user = User::where('user_id', $request->input('user_id'))->where('password', $request->input('password'))->firstOrFail();
        }
        catch (Exception $e) {
            return response()->json('error!', 404);
        }

        return response()->json($user, 200);
    }
}
