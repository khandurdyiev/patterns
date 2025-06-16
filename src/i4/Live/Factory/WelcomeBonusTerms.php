<?php

namespace Se\Patterns\i4\Live\Factory;

class WelcomeBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+24 hours');
    }
}
