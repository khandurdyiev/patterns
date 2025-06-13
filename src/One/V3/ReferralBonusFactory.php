<?php

namespace Se\Patterns\One\V3;

class ReferralBonusFactory extends BonusFactory
{
    public function createBonus(): Bonus
    {
        return new ReferralBonus();
    }
}
