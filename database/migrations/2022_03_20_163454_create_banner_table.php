<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_active');
            $table->string('title')->nullable();
            $table->string('title_indo')->nullable();
            $table->text('description')->nullable();
            $table->text('description_indo')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_title')->nullable();
            $table->string('button_title_indo')->nullable();
            $table->string('button_two_link')->nullable();
            $table->string('button_two_title')->nullable();
            $table->string('button_two_title_indo')->nullable();
            $table->string('image_name')->nullable();
            $table->string('image_link')->nullable();
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
        Schema::dropIfExists('banner');
    }
}
