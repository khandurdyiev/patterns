<?php

namespace Se\Patterns\Two\V0;

class WelcomeBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
