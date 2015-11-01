<?php

namespace Avaliacao\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Artist extends Model implements Transformable
{
    use TransformableTrait;

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
