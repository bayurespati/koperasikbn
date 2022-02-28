<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = "unit";

    protected $guarded = [];

    public function divisi()
    {
        return $this->belongsTo('App\Models\Divisi', 'divisi_id', 'id');
    }
}
