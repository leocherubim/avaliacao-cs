<?php

namespace Avaliacao\Repositories;

use Avaliacao\Entities\Artist;
use Prettus\Repository\Eloquent\BaseRepository;

class ArtistRepository extends BaseRepository implements ArtistRepository
{
	public function model()
	{
		return Artist:class;
	}
}