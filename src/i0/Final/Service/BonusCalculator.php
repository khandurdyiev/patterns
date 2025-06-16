<?php

namespace Se\Patterns\i0\Final\Service;

use Se\Patterns\i0\Final\Factory\BonusPointsFactory;
use Se\Patterns\i0\Final\Model\User;

readonly class BonusCalculator
{
    public function __construct(private BonusPointsFactory $bonusPointsFactory)
    {
    }

    public function awardPoints(User $user, string $eventType): void
    {
        $bonusPoints = $this->bonusPointsFactory->createBonus($eventType);
        $points = $bonusPoints->getPoints();
        $description = $bonusPoints->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
