<?php

namespace Se\Patterns\i4\Live\Factory;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }

    public function createTerms(): BonusTerms
    {
        return new FirstPurchaseBonusTerms();
    }
}
