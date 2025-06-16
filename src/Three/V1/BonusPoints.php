<?php

namespace Se\Patterns\Three\V1;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
