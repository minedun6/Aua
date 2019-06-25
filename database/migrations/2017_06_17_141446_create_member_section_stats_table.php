<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberSectionStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

     Schema::create('member_section_stats', function (Blueprint $table) {
   // a section member has one stat_table
      $table->increments('id');
      $table->integer('member_section_id')->unsigned();
      $table->string('self_employed');
      $table->string('government');
      $table->string('private_sector');
      $table->string('teacher');
      $table->string('trainee');
      $table->string('other');
      $table->string('total_members');
      $table->string('recognized_schools');
      $table->string('non_recognized_schools');
      $table->string('total_schools');
      $table->timestamps();


      $table->foreign('member_section_id')
      ->references('id')
      ->on('member_section')
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
        Schema::dropIfExists('member_section_stats');
    }
}
