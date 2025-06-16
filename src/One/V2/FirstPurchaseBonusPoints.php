<?php

namespace Se\Patterns\One\V2;

class FirstPurchaseBonusPoints implements BonusPoints
{
    public function getPoints(): int
    {
        return 250;
    }

    public function getDescription(): string
    {
        return 'First purchase.';
    }
}
