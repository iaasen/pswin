<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendMultipleWapPushResponse implements ResultInterface
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue
     */
    private $SendMultipleWapPushResult;

    /**
     * @return \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue
     */
    public function getSendMultipleWapPushResult()
    {
        return $this->SendMultipleWapPushResult;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue $SendMultipleWapPushResult
     * @return SendMultipleWapPushResponse
     */
    public function withSendMultipleWapPushResult($SendMultipleWapPushResult)
    {
        $new = clone $this;
        $new->SendMultipleWapPushResult = $SendMultipleWapPushResult;

        return $new;
    }


}

