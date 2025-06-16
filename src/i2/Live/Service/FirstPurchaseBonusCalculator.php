<?php

namespace Se\Patterns\i2\Live\Service;

class FirstPurchaseBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }

    protected function createBonusTerms(): BonusTerms
    {
        return new FirstPurchaseBonusTerms();
    }
}
