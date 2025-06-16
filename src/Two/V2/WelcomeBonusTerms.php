<?php

namespace Se\Patterns\Two\V2;

class WelcomeBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+24 hours');
    }
}
