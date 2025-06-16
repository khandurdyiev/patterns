<?php

namespace Se\Patterns\i4\Init\Factory;

class WelcomeBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+24 hours');
    }
}
