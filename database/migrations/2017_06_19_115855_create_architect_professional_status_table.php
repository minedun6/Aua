<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchitectProfessionalStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('architect_professional_status', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('architect_profile_id')->unsigned(); //ref
      $table->integer('professional_status_id')->unsigned(); //ref
      $table->string('status');
      $table->string('date');
      $table->string('employer');
      $table->string('position');
      $table->string('responsibilities');
      $table->string('projects');
      $table->timestamps();


      $table->foreign('architect_profile_id')
      ->references('id')
      ->on('architect_profile')
      ->onDelete('cascade');
    

      $table->foreign('professional_status_id')
      ->references('id')
      ->on('professional_status')
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
      Schema::dropIfExists('architect_professional_status');
    }
}
