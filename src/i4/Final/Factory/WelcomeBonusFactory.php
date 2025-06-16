<?php

namespace Se\Patterns\i4\Final\Factory;

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
