<?php

declare(strict_types=1);

namespace Se\Patterns\v1\live\Model;

class Player
{
    public function __construct(
        private readonly int $id,
        private string $name
    ) {}

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
