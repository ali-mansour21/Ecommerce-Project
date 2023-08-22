<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function create(){
        return view('admin.products.create');
    }
    public function store(Request $request , Product $product){
        $data = $request->validate([
            'title'=>'required',
            'price'=>'required|min:1',
            'quantity'=>'required',
            'productImage'=>'image|required',
            'description'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')]
        ]);
        $data['productImage']=request()->file('productImage')->store('productImage');
        $product->create($data);
        return redirect('product')->with('sucess','Product Added');
    }
    public function edit(Product $product){
        return view('admin.products.edit',[
            'product'=>$product
        ]);
    }
    public function update(Product $product){
        $data = request()->validate([
            'title'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'productImage'=>'image',
            'description'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')]
        ]);
        if(isset($data['productImage'])){
            $data['productImage']=request()->file('productImage')->store('productImage');
        }
        $product->update($data);
        return redirect('product');
    }
    public function destroy(Product $product){
        $product->delete();
        return back();
    }
}
