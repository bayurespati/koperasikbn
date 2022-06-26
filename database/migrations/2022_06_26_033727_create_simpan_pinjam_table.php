<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimpanPinjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simpan_pinjam', function (Blueprint $table) {
            $table->id();
            $table->string('no_anggota');
            $table->string('keterangan');
            $table->integer('kode');
            $table->integer('akun_pinjaman');
            $table->double('pot_pinjaman');
            $table->double('pot_jasa');
            $table->date('tanggal_tagihan');
            $table->double('jumlah_angsuran');
            $table->integer('cicilan_ke');
            $table->integer('sisa');
            $table->double('total');
            $table->double('saldo');
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
        Schema::dropIfExists('simpan_pinjam');
    }
}
