<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
	protected $fillable= [
		'body',
		'publication_id',
		'blogueur_id',
	];
    //
    public function blogueur()
    {
    	return $this->belongsTo('App\Blogueur');
    }

    public function publication()
    {
    	return $this->belongsTo('App\Publication');
    }
}