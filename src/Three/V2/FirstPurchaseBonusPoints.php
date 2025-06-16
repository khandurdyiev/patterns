<?php

namespace Se\Patterns\Three\V2;

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
