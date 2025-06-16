<?php

namespace Se\Patterns\Three\V2;

class LoggingBonusServiceDecorator extends BonusServiceDecorator
{
    public function __construct(
        protected Logger $logger,
        protected BonusServiceInterface $bonusService,
    ) {
        parent::__construct($bonusService);
    }

    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        $this->logger->log("Awarding points to user...");

        parent::awardPoints($user, $bonusFactory);
    }
}
