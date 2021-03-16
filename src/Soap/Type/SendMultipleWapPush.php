<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendMultipleWapPush implements RequestInterface
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
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfWapPushMessage
     */
    private $m;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Iaasen\Pswin\Soap\Type\ArrayOfWapPushMessage $m
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
     * @return SendMultipleWapPush
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
     * @return SendMultipleWapPush
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Iaasen\Pswin\Soap\Type\ArrayOfWapPushMessage
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\ArrayOfWapPushMessage $m
     * @return SendMultipleWapPush
     */
    public function withM($m)
    {
        $new = clone $this;
        $new->m = $m;

        return $new;
    }


}

