<?php

namespace Avaliacao\Validators;

use Prettus\Validator\LaravelValidator;

class MusicValidator extends LaravelValidator
{

	protected $rules = [
		'title' => 'required|max:255',
		'duration' => 'required|integer',
		'composer' => 'required|max:255',
		'letter' => 'required|max:2000',
		'album_id' => 'required|integer|exists:albums,id'
	];

}