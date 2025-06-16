<?php

namespace Se\Patterns\Four\V2;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
