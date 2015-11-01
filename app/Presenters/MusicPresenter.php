<?php

namespace Avaliacao\Presenters;

use Avaliacao\Transformers\MusicTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class MusicPresenter
 *
 * @package namespace Avaliacao\Presenters;
 */
class MusicPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new MusicTransformer();
    }
}
