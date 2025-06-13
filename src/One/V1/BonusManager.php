<?php

namespace Se\Patterns\One\V1;

class BonusManager
{
    public function awardPoints(User $user, string $eventType): void
    {
        switch ($eventType) {
            case 'welcome':
                // We create a concrete object right here
                $bonus = new WelcomeBonus();
                break;
            case 'first_purchase':
                // And here too...
                $bonus = new FirstPurchaseBonus();
                break;
            default:
                echo "Error: undefinded bonus type '{$eventType}'.\n";
                return;
        }

        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
