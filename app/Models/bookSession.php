<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bookSession extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'first_name',
        'second_name',
        'phone_code',
        'phone_number',
        'email',
        'company_name',
        'inquiry_type',
        'message'
    ];
}
