<?php

namespace Se\Patterns\Three\V2;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
