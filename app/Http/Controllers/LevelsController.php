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

        if ($pointType == 1) {                                  //급식
            $point = $user->hungry_point + 25;
            $user->hungry_point = $point > 100 ? 100 : $point;
            $user->score += 5;
        }
        else if($pointType == 2) {                              //간식
            $point = $user->hungry_point + 5;
            $user->hungry_point = $point > 100 ? 100 : $point;

            $rand_num = rand(1, 5);
            if ($rand_num <= 1) {                               //간식(확률)
                $point = $user->love_point + 12;
                $user->love_point = $point > 100 ? 100 : $point;
            }
            $user->score += 2;
        }
        else if($pointType == 3){                               //영화
            $rand_num = rand(1, 100);
            if ($rand_num <= 33) {                              //영화(감소확률)
                $point = $user->love_point - 11;
                $user->love_point = $point < 0 ? 0 : $point;
            } else {
                $point = $user->love_point + 9;                 //영화(증가확률)
                $user->love_point = $point > 100 ? 100 : $point;
                $user->score += 7;
            }
        }
        else if($pointType == 4){                               //데이트
            $rand_num = rand(1, 100);
            if ($rand_num <= 75) {                              //데이트(증가확률)
                $point = $user->love_point + 22;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->score += 20;
            } else {                                            //데이트(감소확률)
                $point = $user->love_point - 24;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->score -= 22;
            }
        }
        else if($pointType == 5){                               //코딩
            $point = $user->hungry_point - 7;
            $user->hungry_point = $point < 0 ? 0 : $point;

            $user->score += 7;
        }
        else if($pointType == 6){                               //축구
            $point = $user->hungry_point - 15;
            $user->hungry_point = $point < 0 ? 0 : $point;
            $point = $user->love_point + 8;
            $user->love_point = $point > 100 ? 100 : $point;

            $rand_num = rand(1, 4);
            if ($rand_num <= 1) {                               //점수 증가(랜덤)
                $user->point += 11;
            }
        }
        else if($pointType == 7){                               //안녕
            $rand_num = rand(1, 3);

            if ($rand_num <= 1) {                               //안녕(증가확률)
                $point = $user->love_point + 1;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->point += 1;
            }
        }
        else if($pointType == 8){                               //뭐 해?
            $rand_num = rand(1, 5);

            if ($rand_num <= 2) {                               //뭐 해?(증가확률)
                $point = $user->love_point + 2;
                $user->love_point = $point > 100 ? 100 : $point;
                $user->point += 2;
            } else if ($rand_num == 3) {                         //뭐 해?(감소확률)
                $point = $user->love_point - 4;
                $user->love_point = $point < 0 ? 0 : $point;
                $user->point -= 5;
            }
        }
        else if($pointType == 9){                                //심심해
            $point = $user->love_point + 1;
            $user->love_point = $point > 100 ? 100 : $point;
        }
        else if($pointType == 10){                              //잘 지내?
            $rand_num = rand(1, 100);

            if ($rand_num <= 68) {                              //
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
            $user->score -= 10;
        }

        if ($user->hungry_point == 0) {
            $user->score -= 100;
        }

        if ($user->love_point == 100) {
            $user->level += 1;
            $user->love_point = 25;
            $user->score += 225;
        }

        $user->save();
        return response()->json($user, 201);
    }

    public function getUserInfo(Request $request) {
        $user = User::find($request->query('id'));
        return response()->json($user, 200);
    }
}
