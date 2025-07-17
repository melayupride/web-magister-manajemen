<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSocial extends Model
{
    use HasFactory;

    protected $fillable = [
        'link_ig',
        'link_fb',
        'link_x',
        'link_linkedin',
        'address',
        'phone',
        'fax',
        'website',
        'email'
    ];
}