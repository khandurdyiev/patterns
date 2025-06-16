<?php

namespace Se\Patterns\Two\V1;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }
}
