<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PolicyPage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'p_hero',
        'title_content',
        'sub_title_content',
        'image_content',
        'text',
    ];

    protected $casts = [
        'text' => 'array',
    ];
}
