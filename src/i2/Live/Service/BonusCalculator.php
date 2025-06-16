<?php

namespace Se\Patterns\i2\Live\Service;

use Se\Patterns\i2\Live\Model\User;

abstract class BonusCalculator
{
    public function awardPoints(User $user): void
    {
        $bonus = $this->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();
        $expirationDate = $this->createBonusTerms()->getExpirationDate()->format(DATE_ATOM);

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Exp: {$expirationDate} Reason: {$description}\n";
    }

    abstract protected function createBonus(): BonusPoints;

    abstract protected function createBonusTerms(): BonusTerms;
}
