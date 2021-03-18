<?php
/**
 * User: ingvar
 * Date: 16.03.2021
 * Time: 13.42
 */

namespace Iaasen\Pswin;


use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PswinSoapClientFactory implements FactoryInterface
{
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
	{
		$config = $container->get('config')['pswin'];
		if(isset($config['soap']['wsdl'])) return new PswinSoapClient($config['username'], $config['password'], $config['soap']['wsdl']);
		else return new PswinSoapClient($config['username'], $config['password']);
	}
}