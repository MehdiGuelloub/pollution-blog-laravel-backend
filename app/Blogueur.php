<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogueur extends Model
{
	protected $fillable = [
		'id',
		'name',
		'email',
		'image',
	];
    public function publication()
    {
    	return $this->hasMany('App\Publication');
    }

    public function commentaire ()
    {
        return $this->hasMany('App\Commentaire');
    }
}