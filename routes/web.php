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
//passing data to view
Route::get('/profile',function(){
$name="Namrita";
$age=25;
$products=["Mobile","Laptop","Mouse"];
return view('profile',['name'=>$name,'products'=>$products,'age'=>$age]);
});

// Route::get('/student/{name}', function($name){
// return view('student',['name'=>$name]);
// });

//creating default route
Route::get('/student/{name?}',function($name='Guest'){

return view('student',['name'=>$name]);
});
