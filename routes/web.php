<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('index');
});
Route::get('download',function(){
  $file = public_path()."/kelvin cv.docx";
});
//Route::get('/',function(){
  //return view('index5');
//});

//Route::get ('about',function (){
  //  return view('about');
//});
//Route::get('products',function(){
// return view ('products');
//});
 //Route::get('services',function()
 //{ 
   //  return view('services');
 //});