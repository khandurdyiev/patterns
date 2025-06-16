<?php

namespace Se\Patterns\Three\V0;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
