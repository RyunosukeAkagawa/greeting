<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greet_1($greet1)
    {
        $result1 = "";
        $result2 = "";
        switch ($greet1) {
            case 'morning':
                $result1 = '朝のあいさつ';
                $result2 = 'おはようございます';
                break;
            case 'afternoon':
                $result1 = '昼のあいさつ';
                $result2 = 'こんにちは';
                break;
            case 'evening':
                $result1 = '夕方のあいさつ';
                $result2 = 'こんばんは';
                break;
            case 'night':
                $result1 = '夜のあいさつ';
                $result2 = 'おやすみ';
                break;
            case 'random':
                $ary = array('おはよう', 'こんにちは', 'こんばんは', 'おやすみ');
                $key = array_rand($ary, 1);
                $result1 = 'ランダムなメッセージ';
                $result2 = $ary[$key];
        }
        return view('greeting_views.greeting_1', ['result1' => $result1, 'result2' => $result2]);
    }

    public function greet_2($msg)
    {
        return view('greeting_views.greeting_2', ['msg' => $msg]);
    }
}
