<?php

namespace App\Admin\Header;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function events()
    {
    	return $this->hasMany('App\Admin\Event\Event');
    }

    public function month()
    {
    	return $this->hasMany('App\Admin\Date\Date');
    }

}
