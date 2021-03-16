<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendSingleMessageResponse implements ResultInterface
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    private $SendSingleMessageResult;

    /**
     * @return \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    public function getSendSingleMessageResult()
    {
        return $this->SendSingleMessageResult;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ReturnValue $SendSingleMessageResult
     * @return SendSingleMessageResponse
     */
    public function withSendSingleMessageResult($SendSingleMessageResult)
    {
        $new = clone $this;
        $new->SendSingleMessageResult = $SendSingleMessageResult;

        return $new;
    }


}

