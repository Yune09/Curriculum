<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Curriculum extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'Professional Profile',
        'Skills',
        'Work Experience',
        'Education',
    ];

}