<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUsPage extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'p_hero',
        'title_content',
        'p_content',
        'image_content',
        'form_title_content',
        'facebook_link',
        'instagram_link',
        'linkedin_link',
        'first_name',
        'second_name',
        'phone_code',
        'phone_number',
        'email',
    ];
}
