<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('admin.categories.create');
    }
    public function store(Categorie $categorie){
        $data = request()->validate([
            'name'=>['required']
        ]);
        $categorie->create($data);
        return redirect('product');
    }
    public function edit(Categorie $categorie){
        return view('admin.categories.edit',[
            'category'=>$categorie
        ]);
    }
    public function update(Categorie $categorie){
        $data = request()->validate([
            'name'=>['required']
        ]);
        $categorie->update($data);
        return redirect('product');
    }
    public function destroy(Categorie $categorie){
        $categorie->delete();
        return back();
    }
}
