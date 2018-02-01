<?php

use havennow\widgets\JqueryMaskAsset;
use yii\helpers\Html;

JqueryMaskAsset::register($this);

echo Html::activeInput($type, $model, $attribute, $htmlOptions);

$_id = Html::getInputId($model, $attribute);

$JS_OP = <<< JS

$('#{$_id}').mask('{$mask}', {$options});

JS;

$JS = <<< JS

$('#{$_id}').mask('{$mask}');

JS;

if (empty($options)) {
    $this->registerJs($JS);
}else{
    $this->registerJs($JS_OP);
}



