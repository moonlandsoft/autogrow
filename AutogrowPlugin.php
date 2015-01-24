<?php
namespace moonland\autogrow;

use yii\web\AssetBundle;
/**
 * Autogrow Plugin class.
 * @author Moh Khoirul Anam <moh.khoirul.anaam@gmail.com>
 * @copyright moonlandsoft 2014
 * @since 1
 */
class AutogrowPlugin extends AssetBundle
{
	public $sourcePath = '@moonland/autogrow/assets';
	
	public $js = [
		'jquery.autosize.js',
	];
	
	public $depends = [
		'yii\web\JqueryAsset',
	];
}