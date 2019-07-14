<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Operations;

class OperationsContoller extends Controller
{
    public function Addition($a, $b){
        $result = new Operations();
        $result = $a+$b;
        $result ->save();

        return response()->json($result, 200);

    }

    public function Soustraction($a, $b){
        $result = new Operations();
        $result = $a-$b;
        $result ->save();

        return response()->json($result, 200);

    }

    public function Multiplication($a, $b){
        $result = new Operations();
        $result = $a*$b;
        $result ->save();

        return response()->json($result, 200);

    }

    public function Division($a, $b){
        $result = new Operations();
        $result = $a/$b;
        $result ->save();

        return response()->json($result, 200);

    }
}
