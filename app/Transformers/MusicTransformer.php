<?php

namespace Avaliacao\Transformers;

use League\Fractal\TransformerAbstract;
use Avaliacao\Entities\Music;

/**
 * Class MusicTransformer
 * @package namespace Avaliacao\Transformers;
 */
class MusicTransformer extends TransformerAbstract
{

    /**
     * Transform the \Music entity
     * @param \Music $model
     *
     * @return array
     */
    public function transform(Music $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
