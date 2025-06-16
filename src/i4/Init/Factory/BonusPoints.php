<?php

namespace Se\Patterns\i4\Init\Factory;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
