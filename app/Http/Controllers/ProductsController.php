<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function catalogShow(){
    	return view('catalog');
    }

    public function productShow(){
    	return view('product');
    }

    public function aboutShow(){
    	return view('about');
    }
}
