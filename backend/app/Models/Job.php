<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'title',
        'description',
        'quantity',
        'salary',
        'location',
        'woking_time',
        'type_id',
        'is_fulltime',
        'lever',
        'requirements',
        'end_date',
        'slug',
        'skills',
        'education',
        'is_active',
        'is_urgent',
        'gender',
    ];

    protected $casts = [
        'is_fulltime' => 'boolean',
        'is_active' => 'boolean',
        'is_urgent' => 'boolean',
        'end_date' => 'datetime',
    ];

    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
