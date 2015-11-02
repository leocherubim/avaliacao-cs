<?php

namespace Avaliacao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Avaliacao\Repositories\AlbumRepository;
use Avaliacao\Entities\Album;
use Avaliacao\Presenters\AlbumPresenter;

/**
 * Class AlbumRepositoryEloquent
 * @package namespace Avaliacao\Repositories;
 */
class AlbumRepositoryEloquent extends BaseRepository implements AlbumRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Album::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    /*
     * Presenter para ser serializado
     */
    public function presenter()
    {
        return AlbumPresenter::class;
    }
}
