<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceprojectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('reference_project', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('architect_profile_id')->unsigned(); //ref
          $table->string('project_name');
          $table->string('category'); //ref sur areas of expertise
          $table->string('situation');
          $table->string('components');
          $table->string('owner');
          $table->string('design_team');
          $table->string('entreprise');
          $table->string('missions');
          $table->string('duration_designphase');
          $table->date('starting_date');
          $table->string('duration_construction_phase');
          $table->date('completion_date');
          $table->string('covered_area');
          $table->string('cost');
          $table->string('photo');
          $table->timestamps();


          $table->foreign('architect_profile_id')
          ->references('id')
          ->on('architect_profile')
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
      Schema::dropIfExists('reference_project');
    }
}
