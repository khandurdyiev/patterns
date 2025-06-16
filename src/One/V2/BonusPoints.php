<?php

namespace Se\Patterns\One\V2;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
