<?php

namespace Se\Patterns\i2\Init\Service;

interface BonusTerms
{
    public function getExpirationDate(): \DateTimeImmutable;
}
