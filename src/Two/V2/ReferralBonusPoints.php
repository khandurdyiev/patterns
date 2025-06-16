<?php

namespace Se\Patterns\Two\V2;

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
