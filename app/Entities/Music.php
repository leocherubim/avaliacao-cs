<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Music extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'title', 
    	'duration', 
    	'composer', 
    	'letter', 
    	'album_id'
    ];

    /*
     * Relacionamento hasOne com model Album
     */
    public function album()
    {
    	return $this->belongsTo(Album::class);
    }

}
