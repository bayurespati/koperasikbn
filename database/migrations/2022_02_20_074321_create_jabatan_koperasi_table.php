<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJabatanKoperasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jabatan_koperasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->bigInteger('user_id')->nullable();
            $table->boolean('is_custom')->unique();
            $table->string('image_name')->unique();
            $table->string('image_link')->unique();
            $table->string('use_name')->unique();
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
        Schema::dropIfExists('jabatan_koperasi');
    }
}
