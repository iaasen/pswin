# pswin
Send SMS messages using Pswin / Link mobility

# Factory
Laminas factory is included

Instantiating without factory:

    new \Iaasen\Pswin\PswinSoapClient(
        'username',
        'password'
    );

#Generating SOAP client using Phpro
Command: ./vendor/bin/soap-client wizard
Options:
* Config-file: config/pswin-soap-client.php
* Wsdl-location: http://soap.pswin.com/?wsdl
* Generic name: Pswin
* Directory: ./vendor/iaasen/pswin/src/Soap
* Namespace: Iaasen\Pswin\Soap
