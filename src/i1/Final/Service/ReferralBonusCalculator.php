<?php

namespace Se\Patterns\i1\Final\Service;

class ReferralBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }
}
