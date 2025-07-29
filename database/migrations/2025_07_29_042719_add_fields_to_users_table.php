<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->integer('usertype')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->text('photo')->nullable();
            $table->text('photo_thumb')->nullable();
            $table->string('ip_add_reg', 50)->nullable();
            $table->string('code_activation', 50)->nullable();
            $table->string('code_forgotten', 50)->nullable();
            $table->dateTime('last_login')->nullable();
            $table->string('created_by', 50)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('modified_by', 50)->nullable();
            $table->dateTime('modified_at')->nullable();
            $table->tinyInteger('is_delete')->default(0);
            $table->string('deleted_by', 50)->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->integer('kd_op')->nullable();
            $table->integer('kd_unit_op')->nullable();
            $table->integer('kd_subunit_op')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'username',
                'password',
                'usertype',
                'is_active',
                'photo',
                'photo_thumb',
                'ip_add_reg',
                'code_activation',
                'code_forgotten',
                'last_login',
                'created_by',
                'created_at',
                'modified_by',
                'modified_at',
                'is_delete',
                'deleted_by',
                'deleted_at',
                'kd_op',
                'kd_unit_op',
                'kd_subunit_op',
            ]);
        });
    }
}
