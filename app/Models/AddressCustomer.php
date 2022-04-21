<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressCustomer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'address_customer';
    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'city',
        'district',
        'address_detail',
    ];
    use HasFactory;
}
