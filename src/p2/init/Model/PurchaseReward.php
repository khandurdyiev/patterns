<?php

declare(strict_types=1);

namespace Se\Patterns\p2\init\Model;

class PurchaseReward implements RewardInterface
{
    public function issue(Player $player): void
    {
        echo "Issued PurchaseReward to Player {$player->getId()}\n";
    }
}
