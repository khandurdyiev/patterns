<?php

namespace Se\Patterns\i3\Init\Factory;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
