<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
		'title',
		'image',
		'blogueur_id',
		'latitude',
		'longitude',
		'nb_likes',
		'nb_dislikes',
		'nb_comments',
    ];

    public function blogueur()
    {
    	return $this->belongsTo('App\Blogueur');
    }

    public function commentaire ()
    {
        return $this->hasMany('App\Commentaire');
    }
}
