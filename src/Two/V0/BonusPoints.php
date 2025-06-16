<?php

namespace Se\Patterns\Two\V0;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
