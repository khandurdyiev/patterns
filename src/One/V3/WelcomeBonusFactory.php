<?php

namespace Se\Patterns\One\V3;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): Bonus
    {
        return new WelcomeBonus();
    }
}
