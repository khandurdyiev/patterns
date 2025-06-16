<?php

namespace Se\Patterns\v3\init\ThirdParty;

class UnitySDKMessage
{
    public function __construct(public readonly string $message)
    {
    }
}

class UnitySDK {
    public function displayReward(UnitySDKMessage $message): void
    {
        echo `[Unity] Showing reward $message->message\n`;
    }
}
