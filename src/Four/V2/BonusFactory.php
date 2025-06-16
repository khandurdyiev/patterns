<?php

namespace Se\Patterns\Four\V2;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
