<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('registration_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('schedule_id')->nullable();
            $table->boolean('is_paid');
            $table->decimal('fee', 6, 2);
            $table->boolean('state');
            $table->dateTime('generated_time');
            $table->foreign('user_id')
                ->references('user_id')->on('user')
                ->onDelete('set null');
            $table->foreign('schedule_id')
                ->references('schedule_id')->on('schedule')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registration');
    }
}
