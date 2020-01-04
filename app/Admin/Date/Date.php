<?php

namespace App\Admin\Date;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function events()
    {
    	return $this->hasMany('App\Admin\Event\Event');
    }

    public function category()
    {
    	return $this->belongsTo('App\Admin\Header\Category');
    }
}
