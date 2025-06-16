<?php

declare(strict_types=1);

namespace Se\Patterns\p2\live\Model;

class LevelCompletedReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued LevelCompletedReward to Player {$player->getId()}\n";
    }
}
