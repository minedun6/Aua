<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function(Blueprint $table) {
        $table->increments('id');
        $table->integer('architect_profile_id')->unsigned(); //ref
        $table->date('start_date');
        $table->date('end_date');
        $table->string('university');
        $table->string('diploma');
        $table->string('description');
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
        Schema::dropIfExists('education');
    }
}
