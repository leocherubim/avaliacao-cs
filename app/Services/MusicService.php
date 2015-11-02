<?php

namespace Avaliacao\Services;

use Avaliacao\Repositories\MusicRepository;
use Avaliacao\Validators\MusicValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MusicService
{

	/**
	 * @var MusicRepository
	 */
	private $repository;

	/**
	 * @var MusicValidator
	 */
	private $validator;

	public function __construct(MusicRepository $repository, MusicValidator $validator)
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
				'message' => 'Música não encontrada'
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
				'message' => 'Música não encontrada'
			];
		}
	}

	public function destroy($id)
	{
		try {
			$music = $this->repository->find($id);

			$this->repository->delete($id);

			return [
    			'message' => $music->title . ' removido com sucesso'
    		];
		} catch(ModelNotFoundException $e) {
			return [
    			'error' => true,
    			'message' => 'Música não encontrada'
    		];
		}
	}


}