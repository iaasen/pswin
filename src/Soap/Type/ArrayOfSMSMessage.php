<?php

namespace Iaasen\Pswin\Soap\Type;

class ArrayOfSMSMessage
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\SMSMessage
     */
    private $SMSMessage;

    /**
     * @return \Iaasen\Pswin\Soap\Type\SMSMessage
     */
    public function getSMSMessage()
    {
        return $this->SMSMessage;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\SMSMessage $SMSMessage
     * @return ArrayOfSMSMessage
     */
    public function withSMSMessage($SMSMessage)
    {
        $new = clone $this;
        $new->SMSMessage = $SMSMessage;

        return $new;
    }


}

