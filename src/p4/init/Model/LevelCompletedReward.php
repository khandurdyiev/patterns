<?php

declare(strict_types=1);

namespace Se\Patterns\p4\init\Model;

class LevelCompletedReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued LevelCompletedReward to Player {$player->getId()}\n";
    }

    public function getAlias(): string
    {
        return "Congratulations! You've completed the level!";
    }
}
