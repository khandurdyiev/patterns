<?php

namespace Se\Patterns\Three\V0;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
