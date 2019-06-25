<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('school', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('member_section_id')->unsigned(); //ref
          $table->string('name');
          $table->string('director')->nullable();
          $table->string('address')->nullable();
          $table->string('email1')->nullable();
          $table->string('email2')->nullable();
          $table->string('phone1')->nullable();
          $table->string('phone2')->nullable();
          $table->string('mobile_phone')->nullable();
          $table->string('fax')->nullable();
          $table->string('website')->nullable();
          $table->boolean('recognition_by_government')->nullable();
          $table->boolean('recognition_by_section_member')->nullable();
          $table->string('reasons')->nullable();
          $table->boolean('international_accreditation')->nullable();
          $table->string('accreditation_body')->nullable();
          $table->boolean('architecture_is_main_course')->nullable();
          $table->boolean('architecture_is_department')->nullable();
          $table->integer('number_of_departments')->nullable();
          $table->integer('study_years')->nullable();
          $table->integer('mondatory_training_years')->nullable();
          $table->boolean('training_included_in_curriculum')->nullable();
          $table->integer('number_of_students')->nullable();
          $table->integer('total_number_of_teachers')->nullable();
          $table->integer('number_of_teachers_architects')->nullable();
          $table->boolean('masters_degree')->nullable();
          $table->boolean('phd')->nullable();
          $table->integer('average_number_of_diplomas_per_year')->unsigned()->nullable();

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
          Schema::dropIfExists('school');
    }
}
