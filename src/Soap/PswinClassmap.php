<?php

namespace Iaasen\Pswin\Soap;

use Iaasen\Pswin\Soap\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class PswinClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('SendSingleMessage', Type\SendSingleMessage::class),
            new ClassMap('SMSMessage', Type\SMSMessage::class),
            new ClassMap('SendSingleMessageResponse', Type\SendSingleMessageResponse::class),
            new ClassMap('ReturnValue', Type\ReturnValue::class),
            new ClassMap('SendMessages', Type\SendMessages::class),
            new ClassMap('ArrayOfSMSMessage', Type\ArrayOfSMSMessage::class),
            new ClassMap('SendMessagesResponse', Type\SendMessagesResponse::class),
            new ClassMap('ArrayOfReturnValue', Type\ArrayOfReturnValue::class),
            new ClassMap('SendSingleWapPush', Type\SendSingleWapPush::class),
            new ClassMap('WapPushMessage', Type\WapPushMessage::class),
            new ClassMap('SendSingleWapPushResponse', Type\SendSingleWapPushResponse::class),
            new ClassMap('SendMultipleWapPush', Type\SendMultipleWapPush::class),
            new ClassMap('ArrayOfWapPushMessage', Type\ArrayOfWapPushMessage::class),
            new ClassMap('SendMultipleWapPushResponse', Type\SendMultipleWapPushResponse::class),
        ]);
    }


}

