<?php

namespace Avaliacao\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Avaliacao\Repositories\MusicRepository;
use Avaliacao\Entities\Music;

/**
 * Class MusicRepositoryEloquent
 * @package namespace Avaliacao\Repositories;
 */
class MusicRepositoryEloquent extends BaseRepository implements MusicRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Music::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
