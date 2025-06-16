<?php

declare(strict_types=1);

namespace Se\Patterns\p2\final\Strategy;

use Se\Patterns\p2\final\Model\Player;
use Se\Patterns\p2\final\Model\RewardInterface;
use Se\Patterns\p2\final\Model\PurchaseReward;
use Se\Patterns\p2\final\Model\LevelCompletedReward;

class LevelBasedRewardStrategy implements RewardIssuingStrategyInterface
{
    public function __construct(
        private readonly int $playerLevel
    ) {}

    public function createReward(Player $player): ?RewardInterface
    {
        if ($this->playerLevel >= 10) {
            return new LevelCompletedReward();
        }

        return new PurchaseReward();
    }
}
