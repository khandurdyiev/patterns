<?php

declare(strict_types=1);

namespace Se\Patterns\p1\init\Model;

class SignupReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued SignupReward to Player {$player->getId()}\n";
    }
}
