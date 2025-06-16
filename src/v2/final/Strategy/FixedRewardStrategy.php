<?php

declare(strict_types=1);

namespace Se\Patterns\v2\final\Strategy;

use Se\Patterns\v2\final\Model\Player;
use Se\Patterns\v2\final\Model\RewardInterface;

class FixedRewardStrategy implements RewardIssuingStrategyInterface
{
    public function __construct(
        private readonly RewardInterface $fixedReward
    ) {}

    public function createReward(Player $player): ?RewardInterface
    {
        return $this->fixedReward;
    }
}
