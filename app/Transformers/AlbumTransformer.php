<?php

namespace Avaliacao\Transformers;

use League\Fractal\TransformerAbstract;
use Avaliacao\Entities\Album;

/**
 * Class AlbumTransformer
 * @package namespace Avaliacao\Transformers;
 */
class AlbumTransformer extends TransformerAbstract
{

    /**
     * Transform the \Album entity
     * @param \Album $model
     *
     * @return array
     */
    public function transform(Album $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
