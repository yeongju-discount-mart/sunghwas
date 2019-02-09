<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelsController extends Controller
{
    public function hwaPoints(Request $request) {
        $user = User::find($request->input('id'));
        if($user == NULL) return response()->json(' ', 404);
        $pointType = $request->input('pointType');

        if ($pointType == 1) {
            $point = $user->hungry_point + 25;
            $user->hungry_point = $point > 100 ? 100 : $point;
            $user->score += 5;
        }
        else if($pointType == 2) {
            $point = $user->hungry_point + 5;
            $user->hungry_point = $point > 100 ? 100 : $point;

            $rand_num = rand(1, 5);
            if ($rand_num <= 1) {
                $point = $user->love_point + 12;
                $user->love_point = $point > 100 ? 100 : $point;
            }
            $user->score += 2;
        }
        else if($pointType == 3){
            $rand_num = rand(1, 100);
            if ($rand_num <= 33) {
                $point = $user->love_point - 11;
                $user->love_point = $point < 0 ? 0 : $point;
            } else {
                $point = $user->love_point + 9;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->score += 7;
            }
        }
        else if($pointType == 4){
            $rand_num = rand(1, 100);
            if ($rand_num <= 75) {
                $point = $user->love_point + 22;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->score += 20;
            } else {
                $point = $user->love_point - 24;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->score -= 22;
            }
        }
        else if($pointType == 5){
            $point = $user->hungry_point - 7;
            $user->hungry_point = $point < 0 ? 0 : $point;

            $user->score += 7;
        }
        else if($pointType == 6){
            $point = $user->hungry_point - 15;
            $user->hungry_point = $point < 0 ? 0 : $point;
            $point = $user->love_point + 8;
            $user->love_point = $point > 100 ? 100 : $point;

            $rand_num = rand(1, 4);
            if ($rand_num <= 1) {
                $user->point += 11;
            }
        }
        else if($pointType == 7){
            $rand_num = rand(1, 3);

            if ($rand_num <= 1) {
                $point = $user->love_point + 1;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->point += 1;
            }
        }
        else if($pointType == 8){
            $rand_num = rand(1, 5);

            if ($rand_num <= 2) {
                $point = $user->love_point + 2;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->point += 2;
            } else if ($rand_num == 3) {
                $point = $user->love_point - 4;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->point -= 5;
            }
        }
        else if($pointType == 9){
            $point = $user->love_point + 1;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 10){
            $rand_num = rand(1, 100);

            if ($rand_num <= 68) {
                $point = $user->love_point + 7;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->score += 15;
            } else {
                $point = $user->love_point - 10;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->score -= 8;
            }
        }
        else if($pointType == 11){
            $rand_num = rand(1, 100);

            if ($rand_num <= 98) {
                $point = $user->love_point + 6;
                $user->love_point = $point > 100 ? 100 : $point;
                $point = $user->hungry_point - 2;
                $user->hungry_point = $point < 0 ? 0 : $point;
                $user->score += 2;
            } else {
                $point = $user->love_point - 70;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->score -= 100;
            }
        }
        else if($pointType == 12){
            $rand_num = rand(1, 2);

            if ($rand_num == 1) {
                $point = $user->love_point + 1;
                $user->love_point = $point > 100 ? 100 : $point;
            } else {
                $user->score += 1;
            }
        }

        if ($user->hungry_point <= 21) {
            $user->score -= 100;
        }

        if ($user->hungry_point == 0) {
            $user->score -= 300;
        }

        if ($user->love_point == 100) {
            $user->level += 1;
            $user->love_point = 0;
            $user->score += 225;
        }

        $user->save();
        return response()->json($user, 201);
    }

    public function getUserInfo(Request $request) {
        $user = User::find($request->input('id'));
        return response()->json($user, 200);
    }
}
