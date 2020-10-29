<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleMemberShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people_member_ship', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('personal_id')->unique(); //身分證號碼
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('people_member_ship');
    }
}
