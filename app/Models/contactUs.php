<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contactUs extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name',
        'second_name',
        'email',
        'phone_code',
        'phone_number',
        'message'
    ];
}
