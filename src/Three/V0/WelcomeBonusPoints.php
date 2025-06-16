<?php

namespace Se\Patterns\Three\V0;

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
