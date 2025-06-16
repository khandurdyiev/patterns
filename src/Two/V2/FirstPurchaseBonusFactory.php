<?php

namespace Se\Patterns\Two\V2;

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
