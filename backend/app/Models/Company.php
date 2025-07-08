<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'address',
        'logo',
        'description',
        'size',
        'phone',
        'email',
        'website',
        'fullname',
        'slug',
        'map',
    ];
}
