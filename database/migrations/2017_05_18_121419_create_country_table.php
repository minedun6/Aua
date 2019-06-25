<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('zone_id')->unsigned();
            $table->string('nameEn');
            $table->string('nameFr');
            $table->string('nameAr');
            $table->string('namePt');
            $table->timestamps();

            $table->foreign('zone_id')
            ->references('id')
            ->on('zone')
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
          Schema::dropIfExists('country');
    }
}
