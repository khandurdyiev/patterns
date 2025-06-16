<?php

namespace Se\Patterns\i4\Final\Factory;

class FirstPurchaseBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+48 hours');
    }
}
