<?php

namespace App\Admin\Event;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Admin\Header\Category');
    }

    public function place()
    {
        return $this->belongsTo('App\Admin\Place\Place','place_id');
    }

    public function month()
    {
        return $this->belongsTo('App\Admin\Date\Date','month_id');
    }
}
