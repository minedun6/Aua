<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchitectExpertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('architect_expertise', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('architect_profile_id')->unsigned(); //ref
          $table->integer('area_expertise_id')->unsigned(); //ref
          $table->timestamps();


          $table->foreign('architect_profile_id')
          ->references('id')
          ->on('architect_profile')
          ->onDelete('cascade');

          $table->foreign('area_expertise_id')
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
        Schema::dropIfExists('architect_expertise');
    }
}
