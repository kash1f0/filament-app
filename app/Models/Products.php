<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Brand;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    public $table = 'products';
    
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'compare_at_price',
        'barcode',
        'cost_per_item',
        'sku',
        'barcode',
        'quantity',
        'security_stock',
        'can_return',
        'can_ship',
        'visibility',
        'publishing_date',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];

    public function category() : HasOne {
        return $this->hasOne(Category::class);
    }

     public function brand() : HasOne {
        return $this->hasOne(Brand::class);
    }

}
