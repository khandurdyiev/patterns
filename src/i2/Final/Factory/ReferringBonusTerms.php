<?php

namespace Se\Patterns\i2\Final\Factory;

class ReferringBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+6 hours');
    }
}
