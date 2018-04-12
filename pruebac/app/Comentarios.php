<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
	protected $table='comments';
	protected $fillable = [
        'body',
    ];

    protected $hidden = [
         'remember_token',
    ];
    /**
     * Comentarios morphs to models in commmentable_type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable()
    {
    	// morphTo($name = commmentable, $type = commmentable_type, $id = commmentable_id)
    	// requires commmentable_type and commmentable_id fields on $this->table
    	return $this->morphTo();
    }
}
