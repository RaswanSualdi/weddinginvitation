<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class greenNatural extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function naturalGreenChats()
    {
        return $this->hasMany(naturalGreenChats::class);
    }
}
