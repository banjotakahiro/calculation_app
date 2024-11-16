<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function result($number_1,$calculate,$number_2)
    {
        if ($calculate =='addition') {
            $result =  $number_1 + $number_2;
        }elseif ($calculate =='subtraction') {
            $result =  $number_1 - $number_2;
        }elseif ($calculate == 'multiplication') {
            $result =  $number_1 * $number_2;
        }elseif ($calculate == 'division') {
            $result =  $number_1 / $number_2;
        }else {
            $result = '計算できませんでした。';
        }

        return view('message.word',['result' => $result]);
    }
}
