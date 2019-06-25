<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('member_section', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('country_id')->unsigned();
          $table->integer('user_id')->unsigned()->unique()->nullable(); //ref
          $table->string('main_language');
          $table->string('address');
          $table->string('email')->unique();
          $table->string('phone')->unique();
          $table->string('fax')->unique()->nullable();
          $table->string('website')->unique();
          $table->string('admincontact')->unique();
          $table->string('position');
          $table->timestamps();


          $table->foreign('user_id')
          ->references('id')
          ->on('users')
          ->onDelete('cascade');

          $table->foreign('country_id')
          ->references('id')
          ->on('country')
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
        Schema::dropIfExists('member_section');
    }
}
