<?php

use Illuminate\Support\Http\Request;
use Illuminate\Support\Facades\Route;

Route: middleware('auth:api')->get('/user',function (Request $request){
return $request->user();
});
Route::get('/get-data',function(){
    return "Hello";
});