<?php

namespace Se\Patterns\Three\V2;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
