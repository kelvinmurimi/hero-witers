<?php

namespace App\Models\gig;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    protected $fillable=[
              'gig_title',
              'gig_slug',
              'gig_body',
    ];
}
