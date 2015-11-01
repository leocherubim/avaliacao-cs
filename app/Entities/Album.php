<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Album extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'title', 
    	'genre', 
    	'release_date', 
    	'price', 
    	'artist_id'
    ];

    /*
     * Relacionamento belongsTo com model Artist
     */
    public function artist()
    {
    	return $this->belongsTo(Artist::class);
    }

    /*
     * Relacionamento hasMany com model Music
     */
    public function musics()
    {
        return $this->hasMany(Music::class);
    }

}
