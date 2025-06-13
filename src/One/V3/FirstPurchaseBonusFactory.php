<?php

namespace Se\Patterns\One\V3;

class FirstPurchaseBonusFactory extends BonusFactory
{
    public function createBonus(): Bonus
    {
        return new FirstPurchaseBonus();
    }
}
