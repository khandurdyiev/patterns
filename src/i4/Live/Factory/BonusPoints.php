<?php

namespace Se\Patterns\i4\Live\Factory;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
