<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasColumn('users', 'icon')) {
        Schema::table('users', function (Blueprint $table) {
          $table->string('icon')->nullable()->default(null);
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
      if (Schema::hasColumn('users', 'icon')) {
        Schema::table('users', function (Blueprint $table) {
          $table->boolean('icon');
        });
      }
    }
}
