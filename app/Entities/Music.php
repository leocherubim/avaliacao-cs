<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'duration', 'composer', 'letter', 'album_id'];

    /*
     * Relacionamento hasOne com model Album
     */
    public function album()
    {
    	return this->hasOne(Album::class);
    }

}
