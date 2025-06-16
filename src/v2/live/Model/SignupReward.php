<?php

declare(strict_types=1);

namespace Se\Patterns\v2\live\Model;

class SignupReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued SignupReward to Player {$player->getId()}\n";
    }
}
