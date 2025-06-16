<?php

namespace Se\Patterns\i4\Live\Factory;

class ReferringBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+6 hours');
    }
}
