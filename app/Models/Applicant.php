<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $primaryKey = 'applicant_id';
    public function status()
    {
        return $this->hasMany(Applicant::class);
    }
    public function joborders()
    {
        return $this->hasMany(Applicant::class);
    }
}
