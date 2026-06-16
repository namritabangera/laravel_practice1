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

//named route
Route::get('/products',function(){
  return "Product List";
})->name('products');

//create route group
Route::prefix('admin')->group(function(){


Route::get('/dashboard',function(){
return "Dashboard";
});
Route::get('/users',function(){
return "Users";
});
Route::get('/products',function(){
return "Products";
});

});

Route::get('/about',function(){

return view('about');
});

//pass variable
Route::get('/display',function(){
$name="Amrita";
return view('display',['name'=>$name]);
});

