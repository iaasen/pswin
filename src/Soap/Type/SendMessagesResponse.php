<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendMessagesResponse implements ResultInterface
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue
     */
    private $SendMessagesResult;

    /**
     * @return \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue
     */
    public function getSendMessagesResult()
    {
        return $this->SendMessagesResult;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ArrayOfReturnValue $SendMessagesResult
     * @return SendMessagesResponse
     */
    public function withSendMessagesResult($SendMessagesResult)
    {
        $new = clone $this;
        $new->SendMessagesResult = $SendMessagesResult;

        return $new;
    }


}

