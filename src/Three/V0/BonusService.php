<?php

namespace Se\Patterns\Three\V0;

readonly class BonusService
{
    public function __construct(private Logger $logger)
    {
    }

    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        $bonus = $bonusFactory->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        // Log the action before awarding points
        $this->logger->log("Awarding {$points} points to user...");

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
