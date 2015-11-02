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
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'album'
    ];

    /**
     * Transform the \Music entity
     * @param \Music $model
     *
     * @return array
     */
    public function transform(Music $model)
    {
        return [
            'idMusica' => (int) $model->id,
            'titulo' => $model->title,
            'duracao' => $model->duration,
            'compositor' => $model->composer,
            'letra' => $model->letter
        ];
    }

    /**
     * Include Album
     *
     * @param Music $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeAlbum(Music $model)
    {
        return $this->item($model->album, new AlbumTransformer());
    }
}
