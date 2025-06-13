<?php

namespace Se\Patterns\Two\V1;

interface Bonus
{
    public function getPoints(): int;

    public function getDescription(): string;
}
