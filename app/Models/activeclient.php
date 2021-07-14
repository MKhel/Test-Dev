<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activeclient extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->hasMany(activeclient::class);
    }
}
