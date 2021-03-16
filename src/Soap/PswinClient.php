<?php

namespace Iaasen\Pswin\Soap;

use Iaasen\Pswin\Soap\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class PswinClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\SendSingleMessage $parameters
     * @return ResultInterface|Type\SendSingleMessageResponse
     * @throws SoapException
     */
    public function sendSingleMessage(\Iaasen\Pswin\Soap\Type\SendSingleMessage $parameters) : \Iaasen\Pswin\Soap\Type\SendSingleMessageResponse
    {
        return $this->call('SendSingleMessage', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendMessages $parameters
     * @return ResultInterface|Type\SendMessagesResponse
     * @throws SoapException
     */
    public function sendMessages(\Iaasen\Pswin\Soap\Type\SendMessages $parameters) : \Iaasen\Pswin\Soap\Type\SendMessagesResponse
    {
        return $this->call('SendMessages', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendSingleWapPush $parameters
     * @return ResultInterface|Type\SendSingleWapPushResponse
     * @throws SoapException
     */
    public function sendSingleWapPush(\Iaasen\Pswin\Soap\Type\SendSingleWapPush $parameters) : \Iaasen\Pswin\Soap\Type\SendSingleWapPushResponse
    {
        return $this->call('SendSingleWapPush', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendMultipleWapPush $parameters
     * @return ResultInterface|Type\SendMultipleWapPushResponse
     * @throws SoapException
     */
    public function sendMultipleWapPush(\Iaasen\Pswin\Soap\Type\SendMultipleWapPush $parameters) : \Iaasen\Pswin\Soap\Type\SendMultipleWapPushResponse
    {
        return $this->call('SendMultipleWapPush', $parameters);
    }


}

