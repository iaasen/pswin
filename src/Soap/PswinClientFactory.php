<?php

namespace Iaasen\Pswin\Soap;

use Iaasen\Pswin\Soap\PswinClient;
use Iaasen\Pswin\Soap\PswinClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class PswinClientFactory
{

    public static function factory(string $wsdl) : \Iaasen\Pswin\Soap\PswinClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(PswinClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new PswinClient($engine, $eventDispatcher);
    }


}

