<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
		protected $table='videos';

		protected $fillable = [
        'titulo', 'contenido','categoria','ano',
    ];

    protected $hidden = [
         'remember_token',
    ];
    //
    /**
     * Videos morphs many Comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
    	// morphMany(MorphedModel, morphableName, type = able_type, relatedKeyName = able_id, localKey = id)
    	return $this->morphMany('App\Comentarios', 'commentable');
    }
}
