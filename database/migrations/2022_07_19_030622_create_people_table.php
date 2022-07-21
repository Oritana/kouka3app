<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');   /* リレーションでusersテーブルのidを入れたカラムを作る */
            $table->string('name');
            $table->string('mail');
            $table->integer('age');
            $table->timestamps();
            /* モデルのリレーション・・・外部usersテーブルのidカラムを参照する 　※hasOneができなかったため*/
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }

    
}
