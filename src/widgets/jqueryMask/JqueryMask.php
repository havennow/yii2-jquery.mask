<?php

namespace havennow\widgets;

use yii\base\Exception;
use yii\base\Model;
use yii\base\Widget;
use yii\helpers\Html;

class JqueryMask extends Widget
{
    public $model;
    public $attribute;
    public $htmlOptions = [];
    public $mask;
    public $options;

    protected function hasModel()
    {
        return $this->model instanceof Model && $this->attribute !== null;
    }

    public function run()
    {
        if (!$this->hasModel()) {
            throw new Exception('Model must be set');
        }

        if (empty($this->attribute)) {
            throw new Exception('Attribute must be set');
        }

        if (empty($this->mask)) {
            throw new Exception('Mask must be set');
        }

        return $this->render('jqueryMask',
            [
                'model' => $this->model,
                'attribute' => $this->attribute,
                'htmlOptions' => $this->htmlOptions,
                'mask' => $this->mask,
                'options' => $this->options,
            ]);
    }