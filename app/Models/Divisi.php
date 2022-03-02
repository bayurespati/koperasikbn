<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = "divisi";

    protected $guarded = [];

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit', 'unit_id', 'id');
    }
}
