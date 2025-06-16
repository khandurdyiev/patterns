<?php

namespace Se\Patterns\Three\V0;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
