<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $fillable = ['email', 'name', 'password', 'national_id', 'img'];
}
