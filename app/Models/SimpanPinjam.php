<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimpanPinjam extends Model
{
    use HasFactory;

    protected $table = "simpan_pinjam";

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'no_anggota', 'no_anggota');
    }

    public function getSaldoAttribute($value)
    {
        return number_format($value, 0, '.', ',');
    }
}
