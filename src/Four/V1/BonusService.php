<?php

namespace Se\Patterns\Four\V1;

readonly class BonusService
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        // new code here
        if (date('m-d') === '06-15') {
            echo "April joke!\n";
            return;
        }
        // new code here

        $bonus = $bonusFactory->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
