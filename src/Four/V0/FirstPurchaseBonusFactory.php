<?php

namespace Se\Patterns\Four\V0;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new FirstPurchaseBonusPoints();
    }
}
