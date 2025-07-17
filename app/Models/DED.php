<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DED extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'deds';
    protected $guarded = ['id'];
}