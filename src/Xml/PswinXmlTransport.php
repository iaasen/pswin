<?php
/**
 * User: ingvar.aasen
 * Date: 27.09.2017
 * Time: 16:15
 */

namespace Iaasen\Pswin\Xml;

use Iaasen\Transport\GuzzleHttpTransport;

/**
 * Class PswinXmlTransport
 *
 * Required config:
 * 		[
 * 			'base_url_xml' => '',
 * 		]
 */
class PswinXmlTransport extends GuzzleHttpTransport
{
	public $headers = [
		'Content-Type' => 'text/xml; charset=UTF-8',
	];


	public function __construct(string $baseUrl = 'https://xml.pswin.com')
	{
		parent::__construct([
			'base_url' => $baseUrl,
		]);
	}


	protected function checkSession() {}


	protected function renewSession() : bool
	{
		return false;
	}

}