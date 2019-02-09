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

    public function getAll(Request $request) {
        $users = User::all();

        return response()->json($users, 200);
    }
}
