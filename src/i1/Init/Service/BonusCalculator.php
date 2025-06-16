<?php

namespace Se\Patterns\i1\Init\Service;

use Se\Patterns\i1\Init\Model\User;

class BonusCalculator
{
    public function awardPoints(User $user, string $eventType): void
    {
        switch ($eventType) {
            case 'welcome':
                $points = 100;
                $description = 'Registration.';
                break;
            case 'first_purchase':
                $points = 250;
                $description = 'First purchase.';
                break;
            default:
                echo "Error: undefined bonus type '{$eventType}'.\n";
                return;
        }

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
