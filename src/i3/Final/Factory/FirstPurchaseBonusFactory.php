<?php

namespace Se\Patterns\i3\Final\Factory;

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
