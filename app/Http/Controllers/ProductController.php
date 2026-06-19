<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $prod=Product::all();
        return view('product',compact('prod'));
    }

    public function create(){
        Product::create(['name'=>'Keyboard', 'price'=>100]);

    }
    public function find($id){
        $prod=Product::find($id);
        return view('details',compact('prod'));
    }
}
