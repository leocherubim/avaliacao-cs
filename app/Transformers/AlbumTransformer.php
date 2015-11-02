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
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'artist'
    ];

    /**
     * Transform the \Album entity
     * @param \Album $model
     *
     * @return array
     */
    public function transform(Album $model)
    {
        return [
            'idAlbum' => (int) $model->id,
            'titulo' => $model->title,
            'genero' => $model->genre,
            'dataLancamento' => $model->release_date,
            'preco' => $model->price
        ];
    }

    /**
     * Include Artist
     *
     * @param Album $model
     * @return \League\Fractal\Resource\Item
     */
    public function includeArtist(Album $model)
    {
        return $this->item($model->artist, new ArtistTransformer());
    }

}
