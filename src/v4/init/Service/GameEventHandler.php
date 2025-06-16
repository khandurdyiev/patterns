<?php

declare(strict_types=1);

namespace Se\Patterns\v4\init\Service;

use Se\Patterns\v4\init\Model\GenericReward;
use Se\Patterns\v4\init\Model\Player;
use Se\Patterns\v4\init\Model\PurchaseReward;

class GameEventHandler
{
    public function handle(Player $player): void
    {
        try {
            $reward = new PurchaseReward();
            $reward->issue($player);
        } catch (\Exception) {
            // fallback → GenericReward
            $reward = new GenericReward();
            $reward->issue($player);
        }
    }
}
