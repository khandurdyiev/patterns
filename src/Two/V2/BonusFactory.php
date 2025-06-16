<?php

namespace Se\Patterns\Two\V2;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;

    abstract public function createTerms(): BonusTerms;
}
