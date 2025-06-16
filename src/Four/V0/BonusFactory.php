<?php

namespace Se\Patterns\Four\V0;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
