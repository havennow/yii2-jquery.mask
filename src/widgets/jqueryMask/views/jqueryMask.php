<?php

use havennow\widgets\JqueryMaskAsset;
use yii\helpers\Html;

JqueryMaskAsset::register($this);

echo Html::activeInput($model, $attribute, $htmlOptions);

$_options = '';
if (!empty($options)) {
    $_options = json_encode($options);
}
$_id = Html::getInputId($model, $attribute);

$JS = <<< JS

$('#{$id}').mask('{$mask}', {$_options});

JS;

$this->registerJs($JS);



