<?php

namespace Se\Patterns\One\V3;

class User
{
    private string $name;
    private int $points = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addPoints(int $points): void
    {
        $this->points += $points;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPointsBalance(): int
    {
        return $this->points;
    }
}
