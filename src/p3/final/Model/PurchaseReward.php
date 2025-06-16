<?php

declare(strict_types=1);

namespace Se\Patterns\p3\final\Model;

class PurchaseReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued PurchaseReward to Player {$player->getId()}\n";
    }

    public function getAlias(): string
    {
        return "Thank you for your purchase! Enjoy your reward!";
    }
}
