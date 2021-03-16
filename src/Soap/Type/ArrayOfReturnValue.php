<?php

namespace Iaasen\Pswin\Soap\Type;

class ArrayOfReturnValue
{

    /**
     * @var \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    private $ReturnValue;

    /**
     * @return \Iaasen\Pswin\Soap\Type\ReturnValue
     */
    public function getReturnValue()
    {
        return $this->ReturnValue;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ReturnValue $ReturnValue
     * @return ArrayOfReturnValue
     */
    public function withReturnValue($ReturnValue)
    {
        $new = clone $this;
        $new->ReturnValue = $ReturnValue;

        return $new;
    }


}

