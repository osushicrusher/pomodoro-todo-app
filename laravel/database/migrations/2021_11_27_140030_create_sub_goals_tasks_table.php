<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubGoalsTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasColumn('sub_goals_tasks', 'id')) {
        Schema::create('sub_goals_tasks', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->unsignedBigInteger('sub_goal_id');
          $table->unsignedBigInteger('task_id');
          $table->foreign('sub_goal_id')->references('id')->on('sub_goals')->onDelete('cascade');
          $table->foreign('task_id')->references('id')->on('tasks')->onDelete('cascade');
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_goals_tasks');
    }
}
