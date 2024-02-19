<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class SampleController extends ApiController
{
    public function sample(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $sum = $firstNumber + $secondNumber;
        return $this->respondSuccess("Success",$sum);
    }

    public function test(Request $request)
    {
        $numbers = $request->numbers ?: null;
        if(empty($numbers)) {
            return $this->respondWithError("Empty numbers");
        }
        $sum = array_sum($numbers);
        return $this->respondSuccess("Success",$sum);
    }
}
