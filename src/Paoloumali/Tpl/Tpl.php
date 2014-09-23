<?php namespace Paoloumali\Tpl;

use Illuminate\Config\Repository;

class Tpl {

	protected $config;

	public function __construct(Repository $config = null)
	{
		$this->config = $config;
	}

	public function cfg($key = null)
	{
		return $key ? $this->config->get('tpl::'.$key) : $this->config->get('tpl::config');
	}

}
