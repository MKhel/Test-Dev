<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveclientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activeclients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clients_name');
            $table->string('country');
            $table->string('jobsite');
            $table->string('descriptions');
            $table->string('poea_accredition');
            $table->date('valid_until');
            $table->string('file');
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
        Schema::dropIfExists('activeclients');
    }
}
