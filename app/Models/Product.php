<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $with = ['category'];
    public function category(){
        return $this->belongsTo(Categorie::class);
    }
    // public function scopeFilter($query,  $filters){
    //     $query->when(request($filters['category']) ?? false,function($query,$category){
    //         $query->whereHas('category',fn($query)=>$query->where('name',$category));
    //     });
    // }
    public function scopeFilter($query, array $filters)
    {
     $query->when($filters['category'] ?? false , fn ($query,$category)=>
        $query->whereHas('category',fn($query)=>
            $query->where('name',$category)
     )
    );

    }
}
