<?php

namespace Se\Patterns\i1\Final\Service;

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
