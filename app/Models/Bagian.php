<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $table = "bagian";

    protected $guarded = [];

    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi', 'divisi_id', 'id');
    }
}
