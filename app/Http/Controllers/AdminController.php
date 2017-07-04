<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function storeProduct() {
    	return view('admin.create.product');
    }

    public function createProduct(Request $request){

    	$this->validate($request, [
            'name' => 'required|min:5',
            'weight' => 'required|min:5',
        ]);


    	$img = $request->input('img');
    	$name = $request->input('name');
    	$weight = $request->input('weight');
    	$articul = $request->input('articul');
    	$candies = $request->input('candies');
    	$priceNew = $request->input('priceNew');
    	$priceOld = $request->input('priceOld');
    	$category = $request->input('category');
    	$hidden = $request->input('hidden');

    }
}
