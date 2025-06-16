<?php

declare(strict_types=1);

namespace Se\Patterns\v1\live\Service;

use Se\Patterns\v1\live\Model\Player;
use Se\Patterns\v1\live\Model\SignupReward;
use Se\Patterns\v1\live\Model\PurchaseReward;
use Se\Patterns\v1\live\Model\LevelCompletedReward;

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
