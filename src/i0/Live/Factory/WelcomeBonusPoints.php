<?php

namespace Se\Patterns\i0\Live\Factory;

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
