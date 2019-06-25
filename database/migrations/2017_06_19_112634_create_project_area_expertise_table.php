<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectAreaExpertiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('project_area_expertise', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('project_id')->unsigned(); //ref
          $table->integer('expertise_id')->unsigned(); //ref
          $table->timestamps();


          $table->foreign('project_id')
          ->references('id')
          ->on('reference_project')
          ->onDelete('cascade');

          $table->foreign('expertise_id')
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
          Schema::dropIfExists('project_area_expertise');
    }
}
