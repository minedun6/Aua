<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchitectprofileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('architect_profile', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('surname');
          $table->integer('user_id')->unsigned()->unique()->nullable(); //ref
          $table->integer('photo_id')->unsigned()->nullable();
          $table->string('email')->unique();
          $table->integer('country_id')->unsigned(); //ref
          $table->integer('member_section_id')->unsigned(); //ref
          $table->string('architect_code')->unique();
          $table->string('education')->nullable();
          $table->string('vision_architect')->nullable();
          $table->integer('status')->unsigned(); //possible values: waiting to be treated 0,accepted and waiting for payment 1,approved 2 ,expired 3
          $table->string('cv')->nullable();
          $table->timestamps();


          $table->foreign('member_section_id')
          ->references('id')
          ->on('member_section')
          ->onDelete('cascade');

          $table->foreign('country_id')
          ->references('id')
          ->on('country')
          ->onDelete('cascade');

          $table->foreign('user_id')
          ->references('id')
          ->on('users')
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
      Schema::dropIfExists('architect_profile');
    }
}
