<?php

use App\Models\Phone;
use Illuminate\Http\Request;

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

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

Route::get('/user', function (Request $request) {
    $request_user = $request->user();
    return response()->json($request_user);
})->middleware(['cors','auth:api']);

Route::get('/phones', function () {
    $phones = Phone::all();
    return $phones;
})->middleware(['cors','auth:api']);