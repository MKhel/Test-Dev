<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    public function Applicant() {
        return $this->hasMany(Applicant::class, 'client_id', 'id');
    }
}
