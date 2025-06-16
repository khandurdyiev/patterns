<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Model;

class SignupReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued SignupReward to Player {$player->getId()}\n";
    }

    public function getAlias(): string
    {
        return "Welcome! Enjoy your signup reward!";
    }
}
