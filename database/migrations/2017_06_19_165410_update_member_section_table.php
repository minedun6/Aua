<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMemberSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('member_section', function (Blueprint $table) {

        $table->integer('elected_member_id')->nullable()->unsigned();


        $table->foreign('elected_member_id')
        ->references('id')
        ->on('elected_member')
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

      Schema::table('member_section', function ($table) {

            $table->dropColumn('elected_member_id');

        });
    }
}
