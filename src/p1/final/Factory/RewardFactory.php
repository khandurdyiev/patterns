<?php

declare(strict_types=1);

namespace Se\Patterns\p1\final\Factory;

use Se\Patterns\p1\final\Model\LevelCompletedReward;
use Se\Patterns\p1\final\Model\PurchaseReward;
use Se\Patterns\p1\final\Model\RewardInterface;
use Se\Patterns\p1\final\Model\SignupReward;

class RewardFactory
{
    public static function create(string $eventType): RewardInterface
    {
        return match ($eventType) {
            'signup' => new SignupReward(),
            'purchase' => new PurchaseReward(),
            'level_completed' => new LevelCompletedReward(),
            default => throw new \InvalidArgumentException("Unknown event type: $eventType"),
        };
    }
}
