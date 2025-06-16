<?php

namespace Se\Patterns\i2\Final\Factory;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;

    abstract public function createTerms(): BonusTerms;
}
