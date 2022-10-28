<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sumController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sum', [sumController::class,"sum"]);

// Route::get('sum', function (Request $req) {
//     $var1 = $req->num1;
//     $var2 = $req->num2;

//     $sum = $var1 + $var2;

//     return response()->json(["Result is"=> $sum, "Status"=>true, "Data" => ["name"=>"test"]]);
    
// });