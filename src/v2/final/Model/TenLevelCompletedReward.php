<?php

declare(strict_types=1);

namespace Se\Patterns\v2\final\Model;

class TenLevelCompletedReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued TenLevelCompletedReward to Player {$player->getId()}\n";
    }
}
