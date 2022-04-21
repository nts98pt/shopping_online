<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MethodPay extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'method_pays';
    protected $fillable = [
        'name'
    ];
    use HasFactory;
}
