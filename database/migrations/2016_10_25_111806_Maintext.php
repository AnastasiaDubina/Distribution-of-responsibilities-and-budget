<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Maintext extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('maintexts', function (Blueprint $t) { //создаем таблицу
            $t -> increments('id');
            $t -> string('name');
            $t -> text('body');
            $t -> string('url');
            $t -> enum('lang',array('ru','en'))->default('ru');
            $t->timestamps();//время создания и обновления записи
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Scheme::drop('maintexts');
        //
    }
}
