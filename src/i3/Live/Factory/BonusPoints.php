<?php

namespace Se\Patterns\i3\Live\Factory;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
