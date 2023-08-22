<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class AllProductController extends Controller
{
    public function index(){
        $products = Product::filter(request(['category']))->get();
        return view('products.index',[
            'products'=>$products,
            'categories'=>Categorie::all('name','id'),
            'currentCategory'=> Categorie::firstWhere('name',request('category'))
        ]);
    }
}
