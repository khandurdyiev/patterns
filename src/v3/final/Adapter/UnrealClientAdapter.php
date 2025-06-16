<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Adapter;

use Se\Patterns\v3\final\Model\RewardInterface;
use Se\Patterns\v3\final\ThirdParty\UnrealSDK;
use Se\Patterns\v3\final\ThirdParty\UnrealSDKMessage;

class UnrealClientAdapter implements ClientAdapterInterface
{
    public function __construct(
        private readonly UnrealSDK $sdk
    ) {}

    public function showReward(RewardInterface $reward): void
    {
        $this->sdk->show(
            new UnrealSDKMessage($reward->getAlias())
        );
    }
}
