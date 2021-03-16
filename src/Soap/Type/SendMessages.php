<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendMessages implements RequestInterface
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfSMSMessage
     */
    private $m;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfSMSMessage $m
     */
    public function __construct($username, $password, $m)
    {
        $this->username = $username;
        $this->password = $password;
        $this->m = $m;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return SendMessages
     */
    public function withUsername($username)
    {
        $new = clone $this;
        $new->username = $username;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return SendMessages
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Iaasen\Pswin\Soap\Type\ArrayOfSMSMessage
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ArrayOfSMSMessage $m
     * @return SendMessages
     */
    public function withM($m)
    {
        $new = clone $this;
        $new->m = $m;

        return $new;
    }


}

