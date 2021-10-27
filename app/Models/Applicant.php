<?php

namespace App\Models;

use Illuminate\Console\Application;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $primaryKey = 'applicant_id';
    public function joborders()
    {
        return $this->belongsTo(JobOrder::class);
    }
    public function applicant()
    {
        return $this->hasMany(Applicant::class, 'joborder_id', 'joborder_id');
    }
    public function applicant_linedup()
    {
        return $this->hasMany(Applicant::class, 'joborder_id', 'joborder_id')->where('job_application_status', 'Selected');
    }
}
