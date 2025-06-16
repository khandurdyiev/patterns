<?php

namespace Se\Patterns\Two\V1;

class WelcomeBonusCalculator extends BonusCalculator
{
    protected function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
