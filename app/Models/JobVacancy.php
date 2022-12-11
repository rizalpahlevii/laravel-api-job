<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class JobVacancy extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $casts = [
        'requirements' => 'array',
        'benefits' => 'array',
        'job_desks' => 'array',
    ];

}
