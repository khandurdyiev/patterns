<?php

namespace Se\Patterns\Two\V0;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }
}
