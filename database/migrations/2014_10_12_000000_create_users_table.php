<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->unsignedSmallInteger('role_id');
            $table->unsignedSmallInteger('teacher_id')->nullable();
            $table->unsignedSmallInteger('position_id')->nullable();
            $table->boolean('is_teacher')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('image_name')->nullable();
            $table->string('image_link')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
