<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor', function (Blueprint $table) {
            $table->increments('doctor_id');
            $table->string('doctor_name', 20);
            $table->integer('department_id')->unsigned();
            $table->string('doctor_rank', 20);
            $table->string('doctor_info', 100);
            $table->foreign('department_id')
                ->references('department_id')->on('department')
                ->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doctor');
    }
}
