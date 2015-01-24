<?php
namespace moonland\autogrow;
/**
 * Autogrown Widget renderer class.
 * @author Moh Khoirul Anam <moh.khoirul.anaam@gmail.com>
 * @copyright moonlandsoft 2014
 * @since 1
 */
class Autogrow extends \yii\base\widget
{
	public $selector;
	
	public $functionName;
	
	public function run()
	{
		$this->registerPlugin();
	}
	
    public function registerPlugin()
    {
    	$view = $this->getView();
    	
    	AutogrowPlugin::register($view);
    	
    	if (isset($this->functionName)) {
    		$js = <<<SCRIPT
function $this->functionName(){
	var textAuto = jQuery('$this->selector');
	textAuto.autosize();
	document.body.offsetWidth;
	textAuto.css({transition: 'all .2s ease-in-out'});
}
SCRIPT;
    	} else {
    		$js = <<<SCRIPT
var textAuto = jQuery('$this->selector');
textAuto.autosize();
document.body.offsetWidth;
textAuto.css({transition: 'all .2s ease-in-out'});
SCRIPT;
    	}
    	$view->registerJs($js);
    }
}
