<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blueOceanChats extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function blueOcean()
    { 
        return $this->belongsTo(blueOcean::class);
    }
}
