<?php

namespace Se\Patterns\i2\Live\Service;

class WelcomeBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }

    protected function createBonusTerms(): BonusTerms
    {
        return new WelcomeBonusTerms();
    }
}
