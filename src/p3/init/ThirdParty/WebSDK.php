<?php

namespace Se\Patterns\p3\init\ThirdParty;

class WebSDKMessage
{
    public function __construct(public readonly string $message)
    {
    }
}

class WebSDK {
    public function renderReward(WebSDKMessage $message): void
    {
        echo `[Web] Showing reward $message->message\n`;
    }
}