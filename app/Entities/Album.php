<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'genre', 'release_date', 'price', 'artist_id'];

    /*
     * Relacionamento hasOne com model Artist
     */
    public function artist()
    {
    	return $this->hasOne(Artist::class);
    }
}
