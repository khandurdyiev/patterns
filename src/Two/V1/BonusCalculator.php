<?php

namespace Se\Patterns\Two\V1;

abstract class BonusCalculator
{
    public function awardPoints(User $user): void
    {
        $bonus = $this->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }

    abstract protected function createBonus(): BonusPoints;
}
