<?php

namespace Se\Patterns\i2\Init\Service;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }

    protected function createBonusTerms(): BonusTerms
    {
        return new ReferringBonusTerms();
    }
}
