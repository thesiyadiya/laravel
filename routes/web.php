<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;


Route::get('/', [DemoController::class,'index']);  
Route::get('/about','App\Http\Controllers\DemoController@about'); 
Route::get('/courses',SingleActionController::class);

Route::resource('photo',PhotoController::class);
//Route::get('/about', function () {
  //return view('about');
 //});

 
//Route::get('/', function () {
 //return view('home');
//});


  // Route::get('/{name?}',function($name=null){
   // $data = compact('name');
    //return view('home1')->with($data);
//});

//Route::get('/home', function () {
  //  return view('home');
//});

//route::redirect('/home','/');

//Route::view('/home','home');

//Route::get('/about/{name}', function ($name) {
    //echo $name;
  //  return view('about', ['name' => $name]);
//});
