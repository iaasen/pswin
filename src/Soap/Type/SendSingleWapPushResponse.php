<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendSingleWapPushResponse implements ResultInterface
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    private $SendSingleWapPushResult;

    /**
     * @return \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    public function getSendSingleWapPushResult()
    {
        return $this->SendSingleWapPushResult;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ReturnValue $SendSingleWapPushResult
     * @return SendSingleWapPushResponse
     */
    public function withSendSingleWapPushResult($SendSingleWapPushResult)
    {
        $new = clone $this;
        $new->SendSingleWapPushResult = $SendSingleWapPushResult;

        return $new;
    }


}

