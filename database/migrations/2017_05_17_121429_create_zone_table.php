<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('zone', function (Blueprint $table) {

        $table->increments('id');
        $table->string('nameEn');
        $table->string('nameFr');
        $table->string('nameAr');
        $table->string('namePt');
        $table->timestamps();
        
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('zone');
    }
}
