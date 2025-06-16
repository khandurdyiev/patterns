<?php

namespace Se\Patterns\Two\V2;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
