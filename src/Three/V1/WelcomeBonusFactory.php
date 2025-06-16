<?php

namespace Se\Patterns\Three\V1;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
