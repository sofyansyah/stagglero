<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunitysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communitys', function (Blueprint $table) {
             $table->increments('id');
            $table->integer('user_id');
            $table->string('location');
            $table->string('title');
            $table->text('description');
            $table->string('image');
            $table->text('tags');
            $table->integer('featured');
            $table->timestamps('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communitys');
    }
}
