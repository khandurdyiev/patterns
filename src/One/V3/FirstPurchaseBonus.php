<?php

namespace Se\Patterns\One\V3;

class FirstPurchaseBonus implements Bonus
{
    public function getPoints(): int
    {
        return 250;
    }

    public function getDescription(): string
    {
        return 'Bonus for the first purchase.';
    }
}
