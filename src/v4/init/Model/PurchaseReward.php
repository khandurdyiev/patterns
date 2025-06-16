<?php

declare(strict_types=1);

namespace Se\Patterns\v4\init\Model;

class PurchaseReward implements RewardInterface
{
    public function issue(Player $player): void
    {
//        throw new \Exception("Not implemented");

        echo "Issued PurchaseReward to Player {$player->getId()}\n";
    }

    public function getAlias(): string
    {
        return "Thank you for your purchase! Enjoy your reward!";
    }
}
