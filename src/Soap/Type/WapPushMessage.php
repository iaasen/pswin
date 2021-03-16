<?php

namespace Iaasen\Pswin\Soap\Type;

class WapPushMessage
{

    /**
     * @var string
     */
    private $ReceiverNumber;

    /**
     * @var string
     */
    private $SenderNumber;

    /**
     * @var string
     */
    private $Url;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $Network;

    /**
     * @var int
     */
    private $Tariff;

    /**
     * @var int
     */
    private $TimeToLive;

    /**
     * @var string
     */
    private $CPATag;

    /**
     * @var bool
     */
    private $RequestReceipt;

    /**
     * @var string
     */
    private $SessionData;

    /**
     * @var string
     */
    private $DeliveryTime;

    /**
     * @return string
     */
    public function getReceiverNumber()
    {
        return $this->ReceiverNumber;
    }

    /**
     * @param string $ReceiverNumber
     * @return WapPushMessage
     */
    public function withReceiverNumber($ReceiverNumber)
    {
        $new = clone $this;
        $new->ReceiverNumber = $ReceiverNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderNumber()
    {
        return $this->SenderNumber;
    }

    /**
     * @param string $SenderNumber
     * @return WapPushMessage
     */
    public function withSenderNumber($SenderNumber)
    {
        $new = clone $this;
        $new->SenderNumber = $SenderNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return WapPushMessage
     */
    public function withUrl($Url)
    {
        $new = clone $this;
        $new->Url = $Url;

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
     * @return WapPushMessage
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
    public function getNetwork()
    {
        return $this->Network;
    }

    /**
     * @param string $Network
     * @return WapPushMessage
     */
    public function withNetwork($Network)
    {
        $new = clone $this;
        $new->Network = $Network;

        return $new;
    }

    /**
     * @return int
     */
    public function getTariff()
    {
        return $this->Tariff;
    }

    /**
     * @param int $Tariff
     * @return WapPushMessage
     */
    public function withTariff($Tariff)
    {
        $new = clone $this;
        $new->Tariff = $Tariff;

        return $new;
    }

    /**
     * @return int
     */
    public function getTimeToLive()
    {
        return $this->TimeToLive;
    }

    /**
     * @param int $TimeToLive
     * @return WapPushMessage
     */
    public function withTimeToLive($TimeToLive)
    {
        $new = clone $this;
        $new->TimeToLive = $TimeToLive;

        return $new;
    }

    /**
     * @return string
     */
    public function getCPATag()
    {
        return $this->CPATag;
    }

    /**
     * @param string $CPATag
     * @return WapPushMessage
     */
    public function withCPATag($CPATag)
    {
        $new = clone $this;
        $new->CPATag = $CPATag;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRequestReceipt()
    {
        return $this->RequestReceipt;
    }

    /**
     * @param bool $RequestReceipt
     * @return WapPushMessage
     */
    public function withRequestReceipt($RequestReceipt)
    {
        $new = clone $this;
        $new->RequestReceipt = $RequestReceipt;

        return $new;
    }

    /**
     * @return string
     */
    public function getSessionData()
    {
        return $this->SessionData;
    }

    /**
     * @param string $SessionData
     * @return WapPushMessage
     */
    public function withSessionData($SessionData)
    {
        $new = clone $this;
        $new->SessionData = $SessionData;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }

    /**
     * @param string $DeliveryTime
     * @return WapPushMessage
     */
    public function withDeliveryTime($DeliveryTime)
    {
        $new = clone $this;
        $new->DeliveryTime = $DeliveryTime;

        return $new;
    }


}

