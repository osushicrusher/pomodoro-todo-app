<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailTokenToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if (!Schema::hasColumn('users', 'email_verified')) {
            Schema::table('users', function (Blueprint $table) {
                $table->tinyInteger('email_verified')->default(0);
                $table->string('email_verify_token')->nullable();
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
        if(Schema::hasColumn('users', 'email_verified')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('email_verified');
                $table->dropColumn('email_verify_token');
            });
        }
    }
}
