<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporate extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_code',
        'first_name',
        'last_name',
        'state',
        'local_government',
        'address',
        'landmark',
        'phone_number',
        'email',
        'profile_image',
        'caddress',
        'tin',
        'cac',
        'idcard',
        'bank_number',
        'bank_name',
        'bank'
    ];
}
