<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    public $hidden = [
        'id'
    ];

    public $fillable = [
        'name',
        'email'
    ];

    public $timestamps = false;
}
