<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    protected $table = "permintaan";

    protected $guarded = [];

    protected $appends = array('nominal_format');

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function pengajuan()
    {
        return $this->belongsTo('App\Models\JenisPengajuan', 'jenis_pengajuan_id', 'id');
    }

    public function getNominalFormatAttribute()
    {
        return number_format($this->nominal, 0, '.', ',');
    }
}
