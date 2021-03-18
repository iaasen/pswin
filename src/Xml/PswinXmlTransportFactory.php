<?php
/**
 * User: ingvar.aasen
 * Date: 27.09.2017
 * Time: 16:40
 */

namespace Iaasen\Pswin\Xml;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class PswinXmlTransportFactory implements FactoryInterface
{
	/**
	 * @return PswinXmlTransport
	 */
	public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
	{
		$config = $container->get('Config')['pswin'];
		if(isset($config['xml']['base_url'])) return new PswinXmlTransport($config['xml']['base_url']);
		else return new PswinXmlTransport();
	}
}