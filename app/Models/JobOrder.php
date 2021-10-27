<?php

namespace App\Models;

use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    use HasFactory;
    public function applicant() {
        return $this->hasMany(Applicant::class, 'joborder_id', 'joborder_id')->where('job_application_status', 'Selected');
    }
    public function lined_up() {
        return $this->hasMany(Applicant::class, 'joborder_id', 'joborder_id')->where('job_application_status', 'Line Up');
    }
    public function signed_jol() {
        return $this->hasMany(Applicant::class, 'joborder_id', 'joborder_id')->where('job_application_status', 'Signed JOL');
    }
    public function client() {
        return $this->hasMany(Applicant::class, 'client_id', 'client_id');
    }

}
