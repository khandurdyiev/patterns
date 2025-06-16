<?php

namespace Se\Patterns\i2\Init\Service;

class FirstPurchaseBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+48 hours');
    }
}
