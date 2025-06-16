<?php

namespace Se\Patterns\i2\Live\Service;

interface BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable;
}
