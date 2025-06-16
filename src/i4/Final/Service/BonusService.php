<?php

namespace Se\Patterns\i4\Final\Service;

use Se\Patterns\i4\Final\Factory\BonusFactory;
use Se\Patterns\i4\Final\Model\User;

readonly class BonusService implements BonusServiceInterface
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        $bonus = $bonusFactory->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
