<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomePage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'main_hero',
        'p_hero',
        'button_name',
        'image_hero',

        'main_features',
        'p_features',
        'button_features',
        'image_features',

        'main_partner',
        'p_partner',
        'image_partner',

        'p_reviews',
        'image_reviews',
        'name_reviews',
        'job_reviews',
        'rating_reviews',

        'p_contact',
        'image_contact',
        'instagram_link',
        'facebook_link',
        'linkedin_link',
        'email',
        'phone_number',

        'main_footer',
        'p_footer',
        'image_footer',
        'plolicy_link',
        'contact_link',
        'services_link',
        'about_link',
    ];

    protected $casts = [
        'image_partner'  => 'array',
        'p_reviews'      => 'array',
        'image_reviews'  => 'array',
        'name_reviews'   => 'array',
        'job_reviews'    => 'array',
        'rating_reviews' => 'array',
    ];
}
