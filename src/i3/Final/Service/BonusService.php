<?php

namespace Se\Patterns\i3\Final\Service;

use Se\Patterns\i3\Final\Factory\BonusFactory;
use Se\Patterns\i3\Final\Model\User;

readonly class BonusService implements BonusServiceInterface
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
