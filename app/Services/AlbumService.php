<?php

namespace Avaliacao\Services;

use Avaliacao\Repositories\AlbumRepository;
use Avaliacao\Validators\AlbumValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AlbumService
{

	/**
	 * @var AlbumRepository
	 */
	private $repository;

	/**
	 * @var AlbumValidator
	 */
	private $validator;

}