<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaExpertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('area_expertise', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nameEn');
          $table->string('nameFr');
          $table->string('nameAr');
          $table->string('namePt');
          $table->integer('super_theme_id')->unsigned(); //ref
          $table->integer('sub_theme_id')->unsigned(); //ref
          $table->timestamps();


          $table->foreign('super_theme_id')
          ->references('id')
          ->on('area_expertise')
          ->onDelete('cascade');


          $table->foreign('sub_theme_id')
          ->references('id')
          ->on('area_expertise')
          ->onDelete('cascade');



      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('area_expertise');
    }
}
