<?php

namespace Se\Patterns\One\V2;

class FirstPurchaseBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
