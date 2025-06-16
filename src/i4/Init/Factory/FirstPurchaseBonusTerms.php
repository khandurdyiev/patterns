<?php

namespace Se\Patterns\i4\Init\Factory;

class FirstPurchaseBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+48 hours');
    }
}
