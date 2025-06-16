<?php

declare(strict_types=1);

namespace Se\Patterns\v2\final\Strategy;

use Se\Patterns\v2\final\Model\Player;
use Se\Patterns\v2\final\Model\RewardInterface;
use Se\Patterns\v2\final\Model\PurchaseReward;
use Se\Patterns\v2\final\Model\LevelCompletedReward;
use Se\Patterns\v2\final\Model\TenLevelCompletedReward;

class LevelBasedRewardStrategy implements RewardIssuingStrategyInterface
{
    public function __construct(
        private readonly int $playerLevel
    ) {}

    public function createReward(Player $player): ?RewardInterface
    {
        if ($this->playerLevel >= 10) {
            return new TenLevelCompletedReward();
        }

        return new LevelCompletedReward();
    }
}
