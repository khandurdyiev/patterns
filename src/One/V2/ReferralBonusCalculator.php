<?php

namespace Se\Patterns\One\V2;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): Bonus
    {
        return new ReferralBonus();
    }
}
