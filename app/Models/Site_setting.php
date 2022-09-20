<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site_setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'email',
        'phone',
        'twitter',
        'facebook',
        'youtube',
        'instagram',
    ];
}
