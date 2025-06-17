<?php

namespace Se\Patterns\i1\Live\Service;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
