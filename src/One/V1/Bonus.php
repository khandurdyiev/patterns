<?php

namespace Se\Patterns\One\V1;

interface Bonus
{
    public function getPoints(): int;

    public function getDescription(): string;
}
