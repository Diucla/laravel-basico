<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{    
    protected $fillable = ['name'];

    public function markets()
    {
    	return $this->belongsToMany('App\Market')->withTimestamps();
    }
}
