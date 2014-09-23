<?php

use Illuminate\Support\Facades\Config;

return array(

	'img_favicon' => Config::get('tpl::base_folder').'img/favicon.ico',

	// apple touch icons
	'img_ati57' => Config::get('tpl::base_folder').'img/apple-touch-icon-57x57.png',
	'img_ati72' => Config::get('tpl::base_folder').'img/apple-touch-icon-72x72.png',
	'img_ati114' => Config::get('tpl::base_folder').'img/apple-touch-icon-114x114.png',
	'img_ati144' => Config::get('tpl::base_folder').'img/apple-touch-icon-144x144.png',

	// css
	'css_header' => array(
		Config::get('tpl::base_folder').'css/bootstrap/3.2.0/bootstrap.css',
		Config::get('tpl::base_folder').'css/app.css'
	),

	// js
	'js_header' => array(),
	'js_footer' => array(
		Config::get('tpl::base_folder').'js/jquery/1.11.1/jquery.js',
		Config::get('tpl::base_folder').'js/bootstrap/3.2.0/bootstrap.js'
	)

);
