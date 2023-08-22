<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function redirect(){
        $products = Product::take(6)->get();
     return view('user.index',[
        'products'=>$products
     ]);
    }
    public function index(User $user){
      return view('admin.home',[
        'user'=>$user,
      ]);
}
}
