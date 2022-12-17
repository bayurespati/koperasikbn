<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpanPinjam extends Model
{
    use HasFactory;

    protected $table = "simpan_pinjam";

    protected $guarded = [];

    protected $appends = array('saldo_format');

    public function user()
    {
        return $this->belongsTo('App\User', 'no_anggota', 'no_anggota');
    }

    public function getSaldoFormatAttribute()
    {
        return number_format($this->saldo, 0, '.', ',');
    }
}
