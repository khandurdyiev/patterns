<?php

declare(strict_types=1);

namespace Se\Patterns\p1\init\Service;

use Se\Patterns\p1\init\Model\Player;
use Se\Patterns\p1\init\Model\SignupReward;
use Se\Patterns\p1\init\Model\PurchaseReward;
use Se\Patterns\p1\init\Model\LevelCompletedReward;

class GameEventHandler
{
    public function handle(string $eventType, Player $player): void
    {
        $reward = match ($eventType) {
            'signup' => new SignupReward(),
            'purchase' => new PurchaseReward(),
            'level_completed' => new LevelCompletedReward(),
            default => throw new \InvalidArgumentException("Unknown event type: {$eventType}"),
        };

        $reward->issue($player);
    }
}
