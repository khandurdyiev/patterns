<?php

namespace Se\Patterns\Three\V2;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }
}
