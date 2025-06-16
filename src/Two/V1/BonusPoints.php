<?php

namespace Se\Patterns\Two\V1;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
