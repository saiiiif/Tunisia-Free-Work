<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Infomembres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('infomembres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idmembre')->unsigned;
            $table->String('info');
            $table->String('exp');
            $table->String('education');

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
        Schema::dropIfExists('infomembres');
    }
}
