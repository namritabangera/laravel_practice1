<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
return view('welcome');
});

Route::get('/hello', function(){

return "Hello Laravel";
});

Route::get('/about',function(){
    return "This is my first laravel application";
});

Route::get('/user/{name}', function($name){

return "Welcome ".$name;
});

Route::get('/products', [ProductController::class,'index']);
