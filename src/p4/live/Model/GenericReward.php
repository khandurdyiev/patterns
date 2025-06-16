<?php

namespace Se\Patterns\p4\live\Model;

class GenericReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued GenericReward to Player {$player->getId()}\n";
    }

    public function getAlias(): string
    {
        return "Thank you for playing! Enjoy your generic reward!";
    }
}