<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserNameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if (!Schema::hasColumn('users', 'user_name')) {
          Schema::table('users', function (Blueprint $table) {
              $table->string('user_name')->unique();
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
      if(Schema::hasColumn('users', 'user_name')) {
          Schema::table('users', function (Blueprint $table) {
              $table->dropColumn('user_name');
          });
      }
    }
}
