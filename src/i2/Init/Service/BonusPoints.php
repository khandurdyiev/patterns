<?php

namespace Se\Patterns\i2\Init\Service;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
