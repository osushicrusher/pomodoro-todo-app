<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainGoalsSubGoalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_goals_sub_goals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('main_goal_id');
            $table->unsignedBigInteger('sub_goal_id');
            $table->foreign('main_goal_id')->references('id')->on('main_goals')->onDelete('cascade');
            $table->foreign('sub_goal_id')->references('id')->on('sub_goals')->onDelete('cascade');
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
        Schema::dropIfExists('main_goals_sub_goals');
    }
}
