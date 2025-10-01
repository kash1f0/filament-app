<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';
    protected $fillable = [
        'order_date',
        'number',
        'customer',
        'status',
        'currency',
        'total_price',
        'shipping_cost',
    ];
    
    
    
}
