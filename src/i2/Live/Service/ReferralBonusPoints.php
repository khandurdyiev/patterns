<?php

namespace Se\Patterns\i2\Live\Service;

class ReferralBonusPoints implements BonusPoints
{
    public function getPoints(): int
    {
        return 75;
    }

    public function getDescription(): string
    {
        return 'Referring a friend.';
    }
}
