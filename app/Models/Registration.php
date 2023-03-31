<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    public $fillable = [
        'display_name',
        'email',
        'event_id',
        'phone'
    ];

    public $timestamps = false;

    public function event() {
        return $this->hasOne(Event::class);
    }
}
