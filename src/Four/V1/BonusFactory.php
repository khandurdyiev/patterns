<?php

namespace Se\Patterns\Four\V1;

abstract class BonusFactory
{
    abstract public function createBonus(): BonusPoints;
}
