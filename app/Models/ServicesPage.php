<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServicesPage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'p_hero',
        'main_hero',
        'p_content',
        'image_content',
    ];
    protected $casts = [
        'p_content' => 'array',
        'image_content' => 'array',
    ];
}
