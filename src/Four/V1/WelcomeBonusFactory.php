<?php

namespace Se\Patterns\Four\V1;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
