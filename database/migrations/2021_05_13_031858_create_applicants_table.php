<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('applicant_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('age');
            $table->string('position');
            $table->integer('client_id');
            $table->integer('joborder_id');
            $table->string('in_process_status');
            $table->string('job_application_status');
            $table->timestamps();
        });
    }

    /**p
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
