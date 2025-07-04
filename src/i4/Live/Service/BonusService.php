<?php

namespace Se\Patterns\i4\Live\Service;

use Se\Patterns\i4\Live\Factory\BonusFactory;
use Se\Patterns\i4\Live\Model\User;

readonly class BonusService
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        // new code here
        if (date('m-d') === '06-17') {
            echo "April joke!\n";
            return;
        }
        // new code here

        $bonus = $bonusFactory->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $expirationDate = $bonusFactory->createTerms()->getExpirationDate()->format('Y-m-d H:i:s');

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Expiration date: {$expirationDate}. Reason: {$description}\n";
    }
}
