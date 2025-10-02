<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'product_id',
        'parent_category',
        'visibility',
        'description',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];
}
