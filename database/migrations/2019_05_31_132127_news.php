<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class News extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',200);
            $table->string('title',200);
            $table->text('text');
            $table->text('desc');
            $table->string('image');
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
        //
    }
}
//{"mini":"001-60x60.png","sm":"001-400x200.png","max":"001-800x400.png"}
//2019-06-01 16:16:16