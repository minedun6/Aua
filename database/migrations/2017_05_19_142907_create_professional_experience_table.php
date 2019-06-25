<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalexperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('professional_experience', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('architect_profile_id')->unsigned(); //ref
          $table->date('date');
          $table->string('employer');
          $table->string('position');
          $table->string('responsabilities');
          $table->string('main_projects');
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
      Schema::dropIfExists('professional_experience');
    }
}
