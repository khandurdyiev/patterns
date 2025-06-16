<?php

declare(strict_types=1);

namespace Se\Patterns\v2\live\Model;

class TenLevelCompletedReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued LevelCompletedReward to Player {$player->getId()}\n";
    }
}
