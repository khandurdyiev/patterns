<?php

namespace Se\Patterns\Three\V1;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
