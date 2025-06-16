<?php

namespace Se\Patterns\One\V2;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }
}
