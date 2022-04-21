<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdersDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'orders_detail';
    protected $fillable = [
        'order_id',
        'product_id',
        'quality',
        'price',
        'method_pay_id',
    ];

}
