<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blueOcean extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function blueOceanChats()
    {
        return $this->hasMany(blueOceanChats::class);
    }
}
