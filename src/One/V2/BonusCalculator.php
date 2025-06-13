<?php

namespace Se\Patterns\One\V2;

abstract class BonusCalculator
{
    abstract protected function createBonus(): Bonus;

    public function awardPoints(User $user): void
    {
        $bonus = $this->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
