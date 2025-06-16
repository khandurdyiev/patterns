<?php

namespace Se\Patterns\Three\V0;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
