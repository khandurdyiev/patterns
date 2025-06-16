<?php

namespace Se\Patterns\i2\Final\Factory;

class WelcomeBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+24 hours');
    }
}
