<?php

namespace Avaliacao\Http\Controllers;

use Illuminate\Http\Request;

use Avaliacao\Http\Requests;
use Avaliacao\Http\Controllers\Controller;
use Avaliacao\Repositories\ArtistRepository;
use Avaliacao\Entities\Artist;
use Avaliacao\Repositories\ArtistRepositoryEloquent;
use Avaliacao\Service\ArtistService;

class ArtistsController extends Controller
{

    /**
     * @var ArtistRepository
     */
    private $repository;

    /**
     * @var ArtistService
     */
    private $service;

    public function __construct(ArtistRepository $repository, ArtistService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
