<?php

namespace Se\Patterns\i2\Live\Service;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
