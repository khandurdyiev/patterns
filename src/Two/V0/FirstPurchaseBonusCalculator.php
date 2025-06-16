<?php

namespace Se\Patterns\Two\V0;

class FirstPurchaseBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
