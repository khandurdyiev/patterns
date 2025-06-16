<?php

namespace Se\Patterns\i3\Init\Factory;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;

    abstract public function createTerms(): BonusTerms;
}
