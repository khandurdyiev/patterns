<?php

namespace Se\Patterns\Two\V1;

class FirstPurchaseBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
