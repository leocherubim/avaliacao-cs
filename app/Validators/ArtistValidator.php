<?php

namespace Avaliacao\Validators;

use Prettus\Validator\LaravelValidator;

class ArtistValidator extends LaravelValidator
{

	protected $rules = [
		'name' => 'required|max:255',
		'home_country' => 'required|max:100',
		'biography' => 'required|max:500'
	];

	protected $messages = [
	    'email.required' => 'We need to know your e-mail address!',
	];

}