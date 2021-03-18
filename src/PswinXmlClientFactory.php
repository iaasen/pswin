<?php
/**
 * User: ingvar
 * Date: 16.03.2021
 * Time: 13.42
 */

namespace Iaasen\Pswin;


use Iaasen\Pswin\Xml\PswinXmlTransport;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PswinXmlClientFactory implements FactoryInterface
{
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
	{
		$config = $container->get('config')['pswin'];
		return new PswinXmlClient(
			$config['username'],
			$config['password'],
			$container->get(PswinXmlTransport::class)
		);
	}
}