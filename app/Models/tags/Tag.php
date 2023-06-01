<?php

namespace App\Models\tags;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    
    protected $fillables=[
        'name',
        'slug'
        ];
}
