<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElectedMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('elected_member', function (Blueprint $table) {

        $table->increments('id');
        $table->integer('member_section_id')->unsigned(); //ref
        $table->string('name');
        $table->string('role');
        $table->string('aua_position');
        $table->string('address');
        $table->string('email1');
        $table->string('email2');
        $table->string('phone1');
        $table->string('phone2');
        $table->string('fax');
        $table->string('website');
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
        Schema::dropIfExists('elected_member');
    }
}
