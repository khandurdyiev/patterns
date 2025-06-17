<?php

namespace Se\Patterns\i1\Live\Service;

class BonusPointsFactory
{
    public function createBonus(string $eventType): BonusPoints
    {
        return match ($eventType) {
            'welcome' => new WelcomeBonusPoints(),
            'first_purchase' => new FirstPurchaseBonusPoints(),
            default => throw new \InvalidArgumentException("Unknown bonus type: {$eventType}"),
        };
    }
}
