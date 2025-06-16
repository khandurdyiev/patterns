<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Adapter;

use Se\Patterns\v3\final\Model\RewardInterface;
use Se\Patterns\v3\final\ThirdParty\WebSDK;
use Se\Patterns\v3\final\ThirdParty\WebSDKMessage;

class WebClientAdapter implements ClientAdapterInterface
{
    public function __construct(
        private readonly WebSDK $sdk
    ) {}

    public function showReward(RewardInterface $reward): void
    {
        $this->sdk->renderReward(
            new WebSDKMessage($reward->getAlias())
        );
    }
}
