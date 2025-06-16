<?php

namespace Se\Patterns\i4\Init\Factory;

class WelcomeBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new WelcomeBonusPoints();
    }

    public function createTerms(): BonusTerms
    {
        return new WelcomeBonusTerms();
    }
}
