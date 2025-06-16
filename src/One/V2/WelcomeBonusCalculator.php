<?php

namespace Se\Patterns\One\V2;

class WelcomeBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
