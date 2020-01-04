<?php

namespace App\Admin\Place;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function events()
    {
    	return $this->hasMany('App\Admin\Event\Event');
    }
}
