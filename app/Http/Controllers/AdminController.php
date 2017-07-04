<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;

class AdminController extends Controller
{
    public function storeProduct() {
    	return view('admin.create.product');
    }

    public function createProduct(Request $request){

    	$this->validate($request, [
            'img' => 'required|image',
            'name' => 'required|min:5',
            'weight' => 'required|numeric',
            'articul' => 'required|alpha_dash',
            'candies' => 'required|numeric',
            'priceNew' => 'required|numeric',
            'priceOld' => 'required|numeric',
            'category' => 'required'
        ]);
    	$name = $request->input('name');
    	$weight = $request->input('weight');
    	$articul = $request->input('articul');
    	$candies = $request->input('candies');
    	$priceNew = $request->input('priceNew');
    	$priceOld = $request->input('priceOld');
    	$category = $request->input('category');
    	$hidden = $request->input('hidden');

        $img = Image::make($_FILES['img']['tmp_name']);

        $img->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $path = public_path('img/presents/'.$_FILES['img']['name']);

        $img->save($path);

        redirect();

    }
}
