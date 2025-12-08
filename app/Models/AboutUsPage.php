<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutUsPage extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'main_hero',
        'p_hero',
        'button_name',
        'image_hero',

        'main_mission',
        'p_mission',
        'image_mission',

        'main_story',
        'p_story',
        'year_story',
        'image_story',

        'main_slider',
        'p_slider',

        'main_features',
        'p_features',
        'image_features',

        'job_member',
        'name_member',
        'image_member',
    ];

    protected $casts = [
        'main_mission'   => 'array',
        'p_mission'      => 'array',
        'image_mission'  => 'array',

        'main_story'     => 'array',
        'p_story'        => 'array',
        'year_story'     => 'array',
        'image_story'    => 'array',

        'main_features'  => 'array',
        'p_features'     => 'array',
        'image_features' => 'array',

        'job_member'     => 'array',
        'name_member'    => 'array',
        'image_member'   => 'array',
    ];
}
