<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Adapter;

use Se\Patterns\v3\final\Model\RewardInterface;
use Se\Patterns\v3\final\ThirdParty\UnitySDK;
use Se\Patterns\v3\final\ThirdParty\UnitySDKMessage as UnitySDKMessageAlias;

class UnityClientAdapter implements ClientAdapterInterface
{
    public function __construct(
        private readonly UnitySDK $sdk
    ) {}

    public function showReward(RewardInterface $reward): void
    {
        $this->sdk->displayReward(
            new UnitySDKMessageAlias($reward->getAlias())
        );
    }
}
