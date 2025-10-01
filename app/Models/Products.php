<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 'products';
    
    protected $fillable = [
        'image',
        'name',
        'price',
        'brand',
        'visibility',   
    ]
}
