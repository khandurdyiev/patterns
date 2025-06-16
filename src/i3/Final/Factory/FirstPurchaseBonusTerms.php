<?php

namespace Se\Patterns\i3\Final\Factory;

class FirstPurchaseBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+48 hours');
    }
}
