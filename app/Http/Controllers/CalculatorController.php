<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculator(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $option = $request->option;
        switch ($option) {

            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
        }
        return view('index',compact('result'));
    }
}
