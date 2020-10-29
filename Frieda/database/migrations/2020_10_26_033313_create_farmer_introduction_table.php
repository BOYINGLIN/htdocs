<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFarmerIntroductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmer_introduction', function (Blueprint $table) {
            $table->id();
            $table->integer('fid')->unique();   
            $table->string('farm_name');
            $table->text('farm_content');
            $table->integer('lid');
            $table->integer('vegid');
            $table->string('veg_filename'); //商品美照片
            $table->string('discount', 6)->nullable();
            $table->string('contact_number')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_address')->nullable();
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
        Schema::dropIfExists('farmer_introduction');
    }
}
