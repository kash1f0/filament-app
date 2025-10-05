<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    use HasFactory;
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
        'category_id',
        'brand_id',
    ];

    protected $casts = [
        'created_at',
        'updated_at',
    ];

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }

    public function brand() : BelongsTo {
        return $this->belongsTo(Brand::class);
    }

}
