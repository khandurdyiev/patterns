<?php

namespace Se\Patterns\p3\live\ThirdParty;

class UnrealSDKMessage
{
    public function __construct(public readonly string $message)
    {
    }
}

class UnrealSDK {
    public function show(UnrealSDKMessage $message): void
    {
        echo `[Unreal] Showing reward $message->message\n`;
    }
}