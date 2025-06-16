<?php

namespace Se\Patterns\i3\Live\Service;

use Se\Patterns\i3\Live\Factory\BonusFactory;
use Se\Patterns\i3\Live\Model\User;

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

        $expirationDate = $bonusFactory->createTerms()->getExpirationDate()->format('Y-m-d H:i:s');

        // new code here
        $this->logger->log("Awarding points to user...");
        // new code here

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Expiration date: {$expirationDate}. Reason: {$description}\n";
    }
}
