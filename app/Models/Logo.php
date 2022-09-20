<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    protected $table = 'logos';

    protected $fillable = [
        'favicon_image',
        'logo_image',
        'site_name'
    ];

}
