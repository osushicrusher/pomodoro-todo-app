<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->boolean('del');
            $table->boolean('done');
            $table->boolean('liked');
            $table->timestamp('due_date');
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
        Schema::dropIfExists('todos');
    }
}
