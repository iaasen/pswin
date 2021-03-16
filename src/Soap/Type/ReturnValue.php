<?php

namespace Iaasen\Pswin\Soap\Type;

class ReturnValue
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Reference;

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return ReturnValue
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return ReturnValue
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->Reference;
    }

    /**
     * @param string $Reference
     * @return ReturnValue
     */
    public function withReference($Reference)
    {
        $new = clone $this;
        $new->Reference = $Reference;

        return $new;
    }


}

