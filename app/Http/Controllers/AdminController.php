<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\ImageManagerStatic as Image;
use App\Product;
use App\Candy;
use App\Category;

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

        return redirect('/admin/edit/product/'.$product->id);
    }

    public function editProduct($id){
        $data = [];
        $product = Product::find($id);
        $candies = Candy::where("product_id", $id)->get();
        
        $data['id'] = $product['id'];
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

    public function updateProduct(Request $request, $id){
        $this->validate($request, [
            'img' => 'image',
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

        if (!empty($_FILES['img']['tmp_name'])) {
            $img = Image::make($_FILES['img']['tmp_name']);

            $img->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $path = public_path('img/presents/'.$_FILES['img']['name']);

            $img->save($path);
        }
       
        $product = Product::find($id);
        $product->name = $name;
        $product->weight = $weight;
        $product->articul = $articul;
        $product->candies = $candies;
        $product->newprice = $priceNew;
        $product->oldprice = $priceOld;
        $product->category_id = $category;

        if (!empty($_FILES['img']['name'])) {
            $product->img = $_FILES['img']['name'];
        }

        $product->save();

        $arr = json_decode($hidden, true);        
               
        foreach ($arr as $item) {

            $candy = Candy::where('name', $item['name'])
                    ->where('product_id', $product->id)->first();

            if (!empty($candy)) {
                $candy->producer = $item['producer'];
                $candy->name = $item['name'];
                $candy->number = $item['number'];
                $candy->save();
            } else {
                $newCandy = new Candy();
                $newCandy->producer = $item['producer'];
                $newCandy->name = $item['name'];
                $newCandy->number = $item['number'];
                $newCandy->product_id = $product->id;
                $newCandy->save();
            }
        }

        return redirect('/admin/edit/product/'.$product->id);
    }

    public function storeCategory() {
        return view('admin.create.category');
    }

    public function createCategory(Request $request) {
        $this->validate($request, [
            'img' => 'required|image',
            'name' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        $img = Image::make($_FILES['img']['tmp_name']);

        $img->resize(500, null, function ($constraint) {
            $constraint->aspectRatio();
        });

        $path = public_path('img/presents/'.$_FILES['img']['name']);

        $img->save($path);
        
        $category = new Category();
        $category->img = $_FILES['img']['name'];
        $category->name = $name;
        $category->description = $description;
        $category->save();

        return redirect('/admin/edit/category/'.$category->id);
    }

    public function editCategory($id){
        $data = [];

        $category = Category::find($id);
        $products = Product::where("category_id", $id)->get();
        
        $data['id'] = $category['id'];
        $data['name'] = $category['name'];
        $data['description'] = $category['description'];
        $data['img'] = $category['img'];
        $data['products'] = $products;

        return view('admin.edit.category', $data);
    }

    public function updateCategory(Request $request, $id){
        $this->validate($request, [
            'img' => 'image',
            'name' => 'required|min:5',
            'description' => 'required|min:5'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');

        if (!empty($_FILES['img']['tmp_name'])) {
            $img = Image::make($_FILES['img']['tmp_name']);

            $img->resize(500, null, function ($constraint) {
                $constraint->aspectRatio();
            });

            $path = public_path('img/presents/'.$_FILES['img']['name']);

            $img->save($path);
        }
       
        $category = Category::find($id);
        $category->name = $name;
        $category->description = $description;

        if (!empty($_FILES['img']['name'])) {
            $category->img = $_FILES['img']['name'];
        }

        $category->save();

        return redirect('/admin/edit/category/'.$category->id);
    }
}
