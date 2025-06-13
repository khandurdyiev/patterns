<?php

namespace Se\Patterns\One\V3;

class ReferralBonus implements Bonus
{
    public function getPoints(): int
    {
        return 75;
    }

    public function getDescription(): string
    {
        return 'Bonus for referring a friend.';
    }
}
