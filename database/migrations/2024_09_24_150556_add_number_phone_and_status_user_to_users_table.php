<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberPhoneAndStatusUserToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'number_phone')) {
                $table->string('number_phone')->nullable(); // Add number_phone column
            }

            if (!Schema::hasColumn('users', 'status_user')) {
                $table->boolean('status_user')->default(1); // Add status_user column with default value
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['number_phone', 'status_user']);
        });
    }
}
