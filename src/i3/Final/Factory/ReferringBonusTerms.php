<?php

namespace Se\Patterns\i3\Final\Factory;

class ReferringBonusTerms implements BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable
    {
        return new \DateTimeImmutable('+6 hours');
    }
}
