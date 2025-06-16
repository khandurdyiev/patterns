<?php

namespace Se\Patterns\v3\final\ThirdParty;

class WebSDKMessage
{
    public function __construct(public readonly string $message)
    {
    }
}

class WebSDK {
    public function renderReward(WebSDKMessage $message): void
    {
        echo "[Web] Showing reward $message->message\n";
    }
}
