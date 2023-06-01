<?php

namespace App\Models\category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
  


    protected $fillables=[
        'name','slug'
    ];

    public function name(){
        return $this->name; 
    }

    public function category_id(){
        return $this->id; 
    }

    public function category_slug(){
        return $this->slug; 
    }



}
