<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
	protected $table='posts';
	protected $fillable = [
        'titulo', 'contenido','categoria',
    ];

    protected $hidden = [
         'remember_token',
    ];
    //
    /**
     * Imagen morphs to models in comments_type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function comments()
    {
    	// morphTo($name = comments, $type = comments_type, $id = comments_id)
    	// requires comments_type and comments_id fields on $this->table
    	return $this->morphMany('App\Comentarios','commentable');
    }
}
