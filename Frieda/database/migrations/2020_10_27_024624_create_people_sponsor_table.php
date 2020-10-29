<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_sponsor', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->nullable(); //民眾id
            $table->integer('fid')->nullable(); //農民id
            $table->integer('con_fid');//農民的贊助合約
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
        Schema::dropIfExists('people_sponsor');
    }
}
