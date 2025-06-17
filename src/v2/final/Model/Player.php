<?php

declare(strict_types=1);

namespace Se\Patterns\v2\final\Model;

class Player
{
    public function __construct(
        private readonly int $id,
        private string $name,
        private int $level = 1,
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function setLevel(int $level): void
    {
        $this->level = $level;
    }
}
