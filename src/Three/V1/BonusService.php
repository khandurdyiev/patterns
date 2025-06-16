<?php

namespace Se\Patterns\Three\V1;

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

        // new code here
        $this->logger->log("Awarding points to user...");
        // new code here

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";
    }
}
