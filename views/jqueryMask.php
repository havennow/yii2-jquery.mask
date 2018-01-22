<?php

use havennow\widgets\JqueryMaskAsset;
use yii\helpers\Html;

JqueryMaskAsset::register($this);

echo Html::activeInput($model, $attribute, $htmlOptions);

$_id = Html::getInputId($model, $attribute);

$JS = <<< JS

$('#{$id}').mask('{$mask}', {$options});

JS;

$this->registerJs($JS);



