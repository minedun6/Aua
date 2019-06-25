<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('project_photo', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('project_id')->unsigned(); //ref
          $table->integer('photo_id')->unsigned(); //ref
          $table->timestamps();


          $table->foreign('project_id')
          ->references('id')
          ->on('reference_project')
          ->onDelete('cascade');

          $table->foreign('photo_id')
          ->references('id')
          ->on('photo')
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
        Schema::dropIfExists('project_photo');
    }
}
