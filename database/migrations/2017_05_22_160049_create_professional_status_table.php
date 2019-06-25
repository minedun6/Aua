<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('professional_status', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nameEn');
          $table->string('nameFr');
          $table->string('nameAr');
          $table->string('namePt');


      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professional_status');
    }
}
