<?php

namespace Iaasen\Pswin\Soap\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendSingleWapPush implements RequestInterface
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
     * @var \Iaasen\Pswin\Soap\Type\WapPushMessage
     */
    private $m;

    /**
     * Constructor
     *
     * @var string $username
     * @var string $password
     * @var \Iaasen\Pswin\Soap\Type\WapPushMessage $m
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
     * @return SendSingleWapPush
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
     * @return SendSingleWapPush
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \Iaasen\Pswin\Soap\Type\WapPushMessage
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * @param \Iaasen\Pswin\Soap\Type\WapPushMessage $m
     * @return SendSingleWapPush
     */
    public function withM($m)
    {
        $new = clone $this;
        $new->m = $m;

        return $new;
    }


}

