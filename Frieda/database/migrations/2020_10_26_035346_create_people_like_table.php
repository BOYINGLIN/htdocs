<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleLikeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_like', function (Blueprint $table) {
            $table->id();
            $table->integer('pid')->nullable(); //民眾id
            $table->integer('fid')->nullable(); //農民id
            $table->integer('like_fid'); //被喜歡的農民id
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
        Schema::dropIfExists('people_like');
    }
}
