<?php

namespace Avaliacao\Transformers;

use League\Fractal\TransformerAbstract;
use Avaliacao\Entities\Artist;

/**
 * Class ArtistTransformer
 * @package namespace Avaliacao\Transformers;
 */
class ArtistTransformer extends TransformerAbstract
{

    /**
     * Transform the \Artist entity
     * @param \Artist $model
     *
     * @return array
     */
    public function transform(Artist $model)
    {
        return [
            'idArtista' => (int) $model->id,
            'nome' => $model->name,
            'paisOrigem' => $model->home_country,
            'biografia' => $model->biography
        ];
    }
}
