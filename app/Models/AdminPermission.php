<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'admin_permissions';
    protected $fillable = [
        'name_position'
    ];

}
