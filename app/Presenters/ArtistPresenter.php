<?php

namespace Avaliacao\Presenters;

use Avaliacao\Transformers\ArtistTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class ArtistPresenter
 *
 * @package namespace Avaliacao\Presenters;
 */
class ArtistPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ArtistTransformer();
    }
}
