<?php

namespace Se\Patterns\i2\Init\Service;

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
