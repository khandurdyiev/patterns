<?php

namespace Se\Patterns\i3\Live\Factory;

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
