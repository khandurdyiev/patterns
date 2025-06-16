<?php

namespace Se\Patterns\Three\V1;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
