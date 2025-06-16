<?php

namespace Se\Patterns\i1\Final\Service;

interface BonusPoints
{
    public function getPoints(): int;

    public function getDescription(): string;
}
