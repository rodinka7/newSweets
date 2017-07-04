<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function storeCatalog(){
    	return view('catalog');
    }

    public function storeProduct(){
    	return view('product');
    }

    public function storeAbout(){
    	return view('about');
    }
}
