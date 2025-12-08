<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookSessionPage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'p_hero',
        'title_content',
        'first_name',
        'second_name',
        'email',
        'phone_code',
        'phone_number',
        'company_name',
        'inquiry_type',
        'button_name',
    ];
}
