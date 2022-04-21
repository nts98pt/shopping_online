<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'products';
    protected $fillable = [
        'code_product',
        'name',
        'description',
        'image',
        'price',
        'selling_price',
        'status',
        'quantity',
    ];
}
