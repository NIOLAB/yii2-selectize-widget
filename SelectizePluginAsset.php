<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\widgets;

use yii\web\AssetBundle;

/**
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
class SelectizePluginAsset extends AssetBundle
{
	public $sourcePath = '@vendor/brianreavis/selectize.js/dist/js';

	public $js = [
		'standalone/selectize.js'
	];

	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init()
	{
		$this->js = YII_DEBUG ? ['standalone/selectize.js'] : ['standalone/selectize.min.js'];
		parent::init();
	}
}
