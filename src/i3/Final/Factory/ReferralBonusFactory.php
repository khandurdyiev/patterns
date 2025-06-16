<?php

namespace Se\Patterns\i3\Final\Factory;

class ReferralBonusFactory extends BonusFactory
{
    public function createBonus(): BonusPoints
    {
        return new ReferralBonusPoints();
    }

    public function createTerms(): BonusTerms
    {
        return new ReferringBonusTerms();
    }
}
