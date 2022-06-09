<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JabatanKoperasi extends Model
{
    protected $table = "jabatan_koperasi";

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
