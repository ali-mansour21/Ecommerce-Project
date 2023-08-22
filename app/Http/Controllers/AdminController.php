<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function product(Categorie $categorie){
        return view('admin.adminProduct',[
            'products'=>Product::all(),
            'categories'=>$categorie->all()
        ]);
    }
    public function account(User $user){
        return view('admin.accounts.index',[
            'users'=>$user->all()
        ]);
    }
    public function edit(User $user){
        return view('admin.accounts.edit',[
            'user'=>$user
        ]);
    }
    public function update(User $user){
        $data = request()->validate([
            'name'=>['required','min:2','max:50'],
            'email'=>['required','email'],
            'phone'=>['required','min:8','max:12'],
            'user_type'=>['required','max:1']
        ]);
        $user->update($data);
        return redirect('accounts');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect('/');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
