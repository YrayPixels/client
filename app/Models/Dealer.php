<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
    use HasFactory;

      protected $fillable = [
        'user_type',
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
        'store_name',
        'store_address',
        'idcard',
        'bank_number',
        'bank_name',
        'bank'
    ];
}
