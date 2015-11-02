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

	public function __construct(AlbumRepository $repository, AlbumValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function store(array $data)
	{
		try {
			$this->validator->with($data)->passesOrFail();

			return $this->repository->create($data);
		} catch(ValidatorException $e) {
			return [
				'errors' => true,
				'message' => $e->getMessageBag()
			];
		} 
	}

	public function show($id)
	{
		try {
			return $this->repository->find($id);
		} catch(ModelNotFoundException $e) {
			return [
				'error' => true,
				'message' => 'Album não encontrado'
			];
		}
	}

	public function update(array $data, $id)
	{
		try {
			$this->validator->with($data)->passesOrFail();

			return $this->repository->update($data, $id);
		} catch(ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		} catch(ModelNotFoundException $e) {
			return [
				'error' => true,
				'message' => 'Album não encontrado'
			];
		}
	}

	public function destroy($id)
	{
		try {
			$album = $this->repository->find($id);

			$this->repository->delete($id);

			return [
    			'message' => $album->title . ' removido com sucesso'
    		];
		} catch(ModelNotFoundException $e) {
			return [
    			'error' => true,
    			'message' => 'Album não encontrado'
    		];
		}
	}


}