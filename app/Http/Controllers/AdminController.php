<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
use App\Product;
use App\Candy;

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

        $arr = json_decode($hidden, true);
        
        $product = new Product();
        $product->img = $_FILES['img']['name'];
        $product->name = $name;
        $product->weight = $weight;
        $product->articul = $articul;
        $product->candies = $candies;
        $product->newprice = $priceNew;
        $product->oldprice = $priceOld;
        $product->category_id = $category;
        $product->save();

        foreach ($arr as $item) {
            $candy = new Candy();
            $candy->producer = $item['producer'];
            $candy->name = $item['candy'];
            $candy->number = $item['number'];
            $candy->product_id = $product->id;
            $candy->save();
        }
    }

    public function editProduct($id){
        $data = [];
        $product = Product::find($id);
        $candies = Candy::where("product_id", $id)->get();
    
        $data['name'] = $product['name'];
        $data['weight'] = $product['weight'];
        $data['articul'] = $product['articul'];
        $data['number'] = $product['candies'];
        $data['newprice'] = $product['newprice'];
        $data['oldprice'] = $product['oldprice'];
        $data['img'] = $product['img'];
        $data['candies'] = $candies;

        return view('admin.edit.product', $data);
    }
}
