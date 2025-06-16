<?php

declare(strict_types=1);

namespace Se\Patterns\p2\init\Service;

use Se\Patterns\p2\init\Model\Player;
use Se\Patterns\p2\init\Model\RewardInterface;
use Se\Patterns\p2\init\Model\SignupReward;
use Se\Patterns\p2\init\Model\PurchaseReward;
use Se\Patterns\p2\init\Model\LevelCompletedReward;

class GameEventHandler
{
    public function handle(string $rewardPolicy, Player $player, int $playerLevel = 1): void
    {
        $reward = $this->createReward($rewardPolicy, $playerLevel);
        $reward->issue($player);
    }

    private function createReward(string $rewardPolicy, int $playerLevel): RewardInterface
    {
        if ($rewardPolicy === 'signup_fixed') {
            return new SignupReward();
        }

        if ($rewardPolicy === 'purchase_fixed') {
            return new PurchaseReward();
        }

        if ($rewardPolicy === 'levelbased_purchase') {
            if ($playerLevel >= 10) {
                return new LevelCompletedReward();
            }

            return new PurchaseReward();
        }

        throw new \InvalidArgumentException("Unknown reward policy: {$rewardPolicy}");
    }
}
