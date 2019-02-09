<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelsController extends Controller
{
    public function hwaPoints(Request $request) {
        $user = User::find($request->input('id'));
        if ($user == NULL) return response()->json([], 404);
        $pointType = $request->input('pointType');

        if ($pointType == 1) {
            $point = $user->hungry_point + 25;
            $user->hungry_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 2){
            $point = $user->hungry_point + 5;
            $user->hungry_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 3){
            $point = $user->love_point + 10;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 4){
            $point = $user->love_point + 25;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 5){
            $point = $user->hungry_point - 7;
            $user->hungry_point = $point < 0 ? 0 : $point;
        }
        else if($pointType == 6){
            $point = $user->hungry_point - 15;
            $user->hungry_point = $point < 0 ? 0 : $point;
            $point = $user->love_point + 10;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 7){
            $point = $user->love_point + 1;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 8){
            $point = $user->love_point + 1;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 9){
            $point = $user->love_point + 10;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 10){
            $point = $user->love_point + 10;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 11){
            $point = $user->love_point + 5;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 12){
            $point = $user->love_point + 10;
            $user->love_point = $point > 100 ? 100 : $point;
        }

        $user->save();
        return response()->json($user, 201);
    }

    public function getUserInfo(Request $request) {
        $user = User::find($request->query('id'));
        return response()->json($user, 200);
    }
}
