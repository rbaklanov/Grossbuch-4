<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->text('description')->after('password');
                $table->string('avatar_image_name', 100)->after('password');
                $table->date('birthday')->after('password')->default('2017-01-01');
                $table->integer('position_id')->unsigned()->after('password');
                $table->integer('department_id')->unsigned()->after('password');
                $table->integer('client_id')->unsigned()->after('password');
                $table->integer('role_id')->unsigned()->after('password');
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
        if (Schema::hasTable('users')) {
            Schema::table('users', function ($table) {
                $table->dropColumn('role_id', 'client_id', 'department_id', 'position_id', 'birthday', 'avatar_image_name', 'description');
            });
        }
    }
}
