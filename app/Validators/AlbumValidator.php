<?php

namespace Avaliacao\Validators;

use Prettus\Validator\LaravelValidator;

class AlbumValidator extends LaravelValidator
{

	protected $rules = [
		'title' => 'required|max:255',
		'genre' => 'required|max:255',
		'release_date' => 'required|date',
		'price' => 'required|numeric',
		'artist_id' => 'required|integer|exists:artists,id'
	];

}