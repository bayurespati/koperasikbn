<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $table = "permintaan";

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pengajuan()
    {
        return $this->belongsTo('App\Models\JenisPengajuan', 'jenis_pengajuan_id', 'id');
    }

    public function getNominalAttribute($value)
    {
        return number_format($value, 0, '.', ',');
    }
}
