<?php

namespace Avaliacao\Service;

use Avaliacao\Repositories\ArtistRepository;
use Avaliacao\Validators\ArtistValidator;
use Prettus\Validator\Exceptions\ValidatorException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ArtistService
{

	/**
	 * @var ArtistRepository
	 */
	private $repository;

	/**
	 * @var ArtistValidator
	 */
	private $validator;

	public function __construct(ArtistRepository $repository, ArtistValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}

	public function create(array $data)
	{
		try {

			$this->validator->with($data)->passesOrFail();

			return $this->repository->create($data);

		} catch(ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
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
				'message' => 'Artista não encontrado'
			];
		}
	}

	public function destroy($id)
    {
    	try {
    		$this->repository->delete($id);
    		return [
    			'message' => 'Artista removido com sucesso'
    		];
    	} catch(ModelNotFoundException $e) {
    		return [
    			'error' => true,
    			'message' => 'Artista não encontrado'
    		];         
    	}
    }

}