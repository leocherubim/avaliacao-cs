<?php

namespace Avaliacao\Presenters;

use Avaliacao\Transformers\AlbumTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AlbumPresenter
 *
 * @package namespace Avaliacao\Presenters;
 */
class AlbumPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AlbumTransformer();
    }
}
