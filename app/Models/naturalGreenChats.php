<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class naturalGreenChats extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function greenNatural()
    { 
        return $this->belongsTo(greenNatural::class);
    }
}
