<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $guarded = [];

    /**
     * Relation 
     *
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'event_tag', 'event_id', 'tag_id');
    }

    public function images()
    {
        return $this->morphMany('App\Models\Image', 'imagetable');
    }
}
