<?php

namespace Avaliacao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Avaliacao\Repositories\ArtistRepository;
use Avaliacao\Entities\Artist;
use Avaliacao\Presenters\ArtistPresenter;

/**
 * Class ArtistRepositoryEloquent
 * @package namespace Avaliacao\Repositories;
 */
class ArtistRepositoryEloquent extends BaseRepository implements ArtistRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Artist::class;
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
        return ArtistPresenter::class;
    }
}
