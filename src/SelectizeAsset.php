<?php
/**
* @link https://github.com/2amigos/yii2-selectize-widget
* @copyright Copyright (c) 2013-2017 2amigOS! Consulting Group LLC
* @license http://opensource.org/licenses/BSD-3-Clause
*/

namespace dosamigos\selectize;

use yii\web\AssetBundle;

/**
* SelectizeAsset
*
* @author 2amigos.us <hola@2amigos.us>
*/
class SelectizeAsset extends AssetBundle
{
	public $basePath = '@webroot';
	public $baseUrl = '@web';

	public $css = [
		'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.0/css/selectize.bootstrap4.min.css'
	];
	public $js = [
		'https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.13.0/js/standalone/selectize.min.js ',
	];
	public $depends = [
		'yii\bootstrap4\BootstrapAsset',
		'yii\web\JqueryAsset',
	];
}
