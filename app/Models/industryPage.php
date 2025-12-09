<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class industryPage extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'p_hero',
        'p_content',
        'title_content',
        'image_content',
        'button_content',
        'main_industries',
        'p_industries',
        'image_industries',
    ];

    protected $casts = [
        'main_industries'  => 'array',
        'p_industries'     => 'array',
        'image_industries' => 'array',
    ];
}
