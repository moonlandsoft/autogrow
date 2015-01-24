<?php
namespace moonland\autogrow;

use yii\widgets\InputWidget;
use yii\helpers\Html;
/**
 * Autogrow InputWidget renderer class.
 * @author Moh Khoirul Anam <moh.khoirul.anaam@gmail.com>
 * @copyright moonlandsoft 2014
 * @since 1
 */
class AutogrowInput extends InputWidget
{
	public function run()
	{
		Autogrow::widget(['selector' => '#'.$this->options['id']]);
		if ($this->hasModel()) {
			return Html::activeTextarea($this->model, $this->attribute, $this->options);
		} else {
			return Html::textarea($this->name, $this->value, $this->options);
		}
	}
}