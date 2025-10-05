<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'website',
        'visibility',
        'description',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];
}
