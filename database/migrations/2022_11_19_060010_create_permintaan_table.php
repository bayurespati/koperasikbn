<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermintaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaan', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('jenis_pengajuan_id');
            $table->date('tanggal_pengajuan');
            $table->bigInteger('nominal');
            $table->boolean('is_online')->nullable();
            $table->string('dokumen_1')->nullable();
            $table->string('dokumen_2')->nullable();
            $table->string('dokumen_3')->nullable();
            $table->string('dokumen_1_name')->nullable();
            $table->string('dokumen_2_name')->nullable();
            $table->string('dokumen_3_name')->nullable();
            $table->string('status')->default(1);
            $table->text('keterangan')->nullable();
            $table->text('keperluan')->nullable();
            $table->integer('lama_angsuran')->nullable();
            $table->integer('nilai_angsuran')->nullable();
            $table->string('phone')->nullable();
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
        Schema::dropIfExists('permintaan');
    }
}
