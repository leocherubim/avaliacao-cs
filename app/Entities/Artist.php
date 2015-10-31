<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 
    	'home_country', 
    	'biography'
    ];

    /*
     * Relacionamento hasMany com model Album
     */
    public function albums()
    {
    	return $this->hasMany(Album::class);
    }

}
