<?php

namespace Se\Patterns\i2\Final\Service;

use Se\Patterns\i2\Final\Factory\BonusFactory;
use Se\Patterns\i2\Final\Model\User;

class BonusService
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        $bonus = $bonusFactory->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $expirationDate = $bonusFactory->createTerms()->getExpirationDate()->format('Y-m-d H:i:s');

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Expiration date: {$expirationDate}. Reason: {$description}\n";
    }
}
