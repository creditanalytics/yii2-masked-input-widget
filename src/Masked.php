<?php

namespace creditanalytics\widgets\masked;

use yii\base\Exception;
use yii\base\Widget;

/**
 * Suggestions Component
 */
class Masked extends Widget
{

    public $el;
    public $placeholder = false;
    public $reverse = false;
    public $pattern = "";

    public function init()
    {
        parent::init();

        if (!$this->el)
            throw new Exception('Не правильный конфиг');
    }

    public function run()
    {
        JqueryMaskedInputAsset::register($this->view);

        $this->regJs();
    }

    protected function regJs()
    {
        $this->view->registerJs(
'$("' . $this->el . '").mask({\''. $this->pattern .'\'});'
    );

    }
}
