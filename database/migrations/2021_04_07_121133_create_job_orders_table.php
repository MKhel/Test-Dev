<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_orders', function (Blueprint $table) {
            $table->increments('joborder_id');
            $table->integer('client_id');
            $table->string('clients_name');
            $table->string('country');
            $table->string('jobsite');
            $table->string('poea_accredition');
            $table->string('actual_position');
            $table->string('position');
            $table->string('gender');
            $table->integer('no_ofworker');
            $table->string('basic_salary'); 
            $table->date('slot_expiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_orders');
    }
}
