<?php

namespace Iaasen\Pswin\Soap\Type;

class ArrayOfWapPushMessage
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\WapPushMessage
     */
    private $WapPushMessage;

    /**
     * @return \Iaasen\Pswin\Soap\Type\WapPushMessage
     */
    public function getWapPushMessage()
    {
        return $this->WapPushMessage;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\WapPushMessage $WapPushMessage
     * @return ArrayOfWapPushMessage
     */
    public function withWapPushMessage($WapPushMessage)
    {
        $new = clone $this;
        $new->WapPushMessage = $WapPushMessage;

        return $new;
    }


}

