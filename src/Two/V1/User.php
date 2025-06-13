<?php

namespace Se\Patterns\Two\V1;

class User
{
    private string $name;
    private string $email; // <-- Додаємо email
    private int $points = 0;

    public function __construct(string $name, string $email) // <-- Оновлюємо конструктор
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function addPoints(int $points): void
    {
        $this->points += $points;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string // <-- Додаємо гетер для email
    {
        return $this->email;
    }

    public function getPointsBalance(): int
    {
        return $this->points;
    }
}
