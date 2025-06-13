<?php

namespace Se\Patterns\Two\V1;

abstract class BonusCalculator
{
    public function __construct(
        protected EmailService $emailService,
        protected AuditLogger $logger
    ) {
    }

    abstract protected function createBonus(): Bonus;

    public function awardPoints(User $user): void
    {
        $bonus = $this->createBonus();
        $points = $bonus->getPoints();
        $description = $bonus->getDescription();

        $user->addPoints($points);

        echo "User '{$user->getName()}' has been awarded {$points} points. Reason: {$description}\n";

        // 1. Відправляємо email
        $this->emailService->sendBonusNotification($user, $bonus);

        // 2. Пишемо в лог
        $this->logger->log("Awarded {$points} points to user {$user->getEmail()}");
    }
}
