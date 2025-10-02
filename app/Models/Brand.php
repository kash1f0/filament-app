<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'product_id',
        'website',
        'visibility',
        'description',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];
}
