<?php

declare(strict_types=1);

namespace Se\Patterns\p4\final\Chain;

use Se\Patterns\p4\final\Model\Player;
use Se\Patterns\p4\final\Model\PurchaseReward;

class PurchaseRewardHandler extends AbstractRewardHandler
{
    protected function process(Player $player): bool
    {
        try {
            $reward = new PurchaseReward();
            $reward->issue($player);

            return true;
        } catch (\Exception $e) {
            echo "PurchaseReward failed, passing to next...\n";

            return false;
        }
    }
}
