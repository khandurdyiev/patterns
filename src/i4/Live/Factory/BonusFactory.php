<?php

namespace Se\Patterns\i4\Live\Factory;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;

    abstract public function createTerms(): BonusTerms;
}
