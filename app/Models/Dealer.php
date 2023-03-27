<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dealer extends Model
{
  use HasFactory;


  protected $fillable = [
    'first_name',
    'last_name',
    'phone_no',
    'email',
    'address',
    'landmark',
    'state',
    'lga',
    'code',
    'type',
  ];

  protected  $table =  'clients';
}
