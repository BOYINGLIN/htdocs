<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_contract', function (Blueprint $table) {
            $table->id();
            $table->integer('fid'); //農夫代號
            $table->string('name');
            $table->text('content');
            $table->integer('price');
            $table->string('con_image');//照片檔名
            $table->date('con_date'); //截止時間
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
        Schema::dropIfExists('farmer_contract');
    }
}
