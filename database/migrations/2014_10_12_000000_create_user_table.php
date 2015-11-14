<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            //            $table->engine = 'InnoDB';
            $table->increments('user_id');//
            $table->string('usrname', 16)->unique();
            $table->string('name', 16);
            $table->string('password', 60);
            $table->enum('sex', array('男', '女'));
            $table->string('phone', 20)->nullable();//->unique();
            //$table->string('email')->unique();
            $table->char('id_number', 18)->nullable();
            $table->tinyInteger('age');
            $table->tinyInteger('credit_level');
            $table->tinyInteger('certified_status')->default(0);
            //$table->rememberToken();//加入 remember_token 使用 VARCHAR(100) NULL
            //$table->timestamps();//加入 created_at 和 updated_at 字段
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
