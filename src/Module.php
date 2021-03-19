<?php
namespace Iaasen\Pswin;

use Laminas\Loader\StandardAutoloader;
use Laminas\ModuleManager\Feature\AutoloaderProviderInterface;
use Laminas\ModuleManager\Feature\ConfigProviderInterface;

class Module implements AutoloaderProviderInterface, ConfigProviderInterface
{

	public function getConfig()
	{
		return include __DIR__ . '/../config/module.config.php';
	}


	public function getAutoloaderConfig() {
		return [
			StandardAutoloader::class => [
				'namespaces' => [
					__NAMESPACE__ => __DIR__ . '/src'
				]
			]
		];
	}
}