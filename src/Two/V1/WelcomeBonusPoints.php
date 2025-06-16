<?php

namespace Se\Patterns\Two\V1;

class WelcomeBonusPoints implements BonusPoints
{
    public function getPoints(): int
    {
        return 100;
    }

    public function getDescription(): string
    {
        return 'Registration.';
    }
}
