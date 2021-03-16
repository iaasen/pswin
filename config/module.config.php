<?php
return [
    'service_manager' => [
        'factories' => [
			\Iaasen\Pswin\PswinSoapClient::class => \Iaasen\Pswin\PswinSoapClientFactory::class,
		],
		'invokables' => [
		],
		'abstract_factories' => [
		],
	],
	'pswin' => [
		'username' => '',
		'password' => '',
		'rest' => [
			'base_url' => 'https://intouchapi.pswin.com/2',
		],
		'soap' => [
			'host' => 'https://soap.pswin.com',
			'wsdl' => 'http://soap.pswin.com/?wsdl',
			'wsdl_file' => 'config/soap.pswin.com.xml',
		],
	],
];
