# yii2-jquery.mask
Widget wrapper for jquery mask https://igorescobar.github.io/jQuery-Mask-Plugin

#Basic usage

```
use havennow\widgets\JqueryMask;



echo $form->field($model, 'input')->textInput()
          ->widget(JqueryMask::className(), [
              'mask' => '99/99/9999',
          ]);?>
            
            or
            
            
echo JqueryMask::widget(['model' => $model, 'attribute'=> 'input','mask' => '99.99','htmlOptions'=> ['class' => 'myclass'],'options' => 'from https://igorescobar.github.io/jQuery-Mask-Plugin docs');

```
