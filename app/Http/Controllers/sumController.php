<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumController extends Controller
{
    //

    public function sum(Request $req){
                $var1 = $req->num1;
                $var2 = $req->num2;
            
                $sum = $var1 + $var2;
            
                return response()->json(["Result is"=> $sum, "Status"=>true, "Data" => ["name"=>"test"]]);
    }
}
