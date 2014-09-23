<?php

Route::get('tpl', function()
{
	//Debugbar::info(App::make('tpl'));
	//Debugbar::info(Tpl::cfg('base_folder'));
	//Debugbar::info(Tpl::cfg());
	return View::make('tpl::hello');
});

Route::get('tpl/template', function()
{
	return View::make('tpl::template');
});