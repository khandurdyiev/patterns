<?php

namespace Se\Patterns\i0\Live\Factory;

class FirstPurchaseBonusPoints implements BonusPoints
{
    public function getPoints(): int
    {
        return 250;
    }

    public function getDescription(): string
    {
        return 'First purchase.';
    }
}
