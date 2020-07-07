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
 //nav id="navbar-example2" class="navbar navbar-expand-lg navbar-light w-100"> 
 //<a class="navbar-brand" href="#top"><img class="nav-logo" src="images/logo/1.png" alt="logo"></a>