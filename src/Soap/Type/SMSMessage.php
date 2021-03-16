<?php

namespace Iaasen\Pswin\Soap\Type;

class SMSMessage
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
    private $Text;

    /**
     * @var string
     */
    private $Network;

    /**
     * @var string
     */
    private $TypeOfMessage;

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
     * @var string
     */
    private $ServiceCode;

    /**
     * @return string
     */
    public function getReceiverNumber()
    {
        return $this->ReceiverNumber;
    }

    /**
     * @param string $ReceiverNumber
     * @return SMSMessage
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
     * @return SMSMessage
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
    public function getText()
    {
        return $this->Text;
    }

    /**
     * @param string $Text
     * @return SMSMessage
     */
    public function withText($Text)
    {
        $new = clone $this;
        $new->Text = $Text;

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
     * @return SMSMessage
     */
    public function withNetwork($Network)
    {
        $new = clone $this;
        $new->Network = $Network;

        return $new;
    }

    /**
     * @return string
     */
    public function getTypeOfMessage()
    {
        return $this->TypeOfMessage;
    }

    /**
     * @param string $TypeOfMessage
     * @return SMSMessage
     */
    public function withTypeOfMessage($TypeOfMessage)
    {
        $new = clone $this;
        $new->TypeOfMessage = $TypeOfMessage;

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
     * @return SMSMessage
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
     * @return SMSMessage
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
     * @return SMSMessage
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
     * @return SMSMessage
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
     * @return SMSMessage
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
     * @return SMSMessage
     */
    public function withDeliveryTime($DeliveryTime)
    {
        $new = clone $this;
        $new->DeliveryTime = $DeliveryTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return SMSMessage
     */
    public function withServiceCode($ServiceCode)
    {
        $new = clone $this;
        $new->ServiceCode = $ServiceCode;

        return $new;
    }


}

