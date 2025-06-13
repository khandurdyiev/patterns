<?php

namespace Se\Patterns\One\V1;

class WelcomeBonus implements Bonus
{
    public function getPoints(): int
    {
        return 100;
    }

    public function getDescription(): string
    {
        return 'Welcome bonus for registration.';
    }
}
