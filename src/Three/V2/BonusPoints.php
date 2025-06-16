<?php

namespace Se\Patterns\Three\V2;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
