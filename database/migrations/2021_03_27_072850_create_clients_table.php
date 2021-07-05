<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clients_name');
            $table->string('descriptions');
            $table->string('country');
            $table->string('jobsite');
            $table->string('poea_accredition');
            $table->date('expiration_date');
            $table->string('poea_position');
            $table->string('visa_position');
            $table->integer('number_slot');
            $table->string('basic_salary'); 
            $table->integer('number_deployed');
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
        Schema::dropIfExists('clients');
    }
}
