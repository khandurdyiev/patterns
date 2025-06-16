<?php

namespace Se\Patterns\i3\Final\Decorator;

use Se\Patterns\i3\Final\Factory\BonusFactory;
use Se\Patterns\i3\Final\Model\User;
use Se\Patterns\i3\Final\Service\BonusServiceInterface;
use Se\Patterns\i3\Final\Service\Logger;

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
