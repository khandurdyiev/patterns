<?php

namespace Se\Patterns\Four\V2;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
