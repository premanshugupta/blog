<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAblogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ablogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aboutme');
            $table->string('aimage');
            $table->string('aboutblog');
            $table->string('skills');
            $table->string('sideproject');
            $table->string('simage');
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
        Schema::dropIfExists('ablogs');
    }
}
