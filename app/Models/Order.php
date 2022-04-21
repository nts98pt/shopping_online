<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'code_order',
        'address_customer_id',
        'status',
    ];

}
