<?php

namespace Se\Patterns\i3\Final\Decorator;

use Se\Patterns\i3\Final\Factory\BonusFactory;
use Se\Patterns\i3\Final\Model\User;
use Se\Patterns\i3\Final\Service\BonusServiceInterface;

class BonusServiceDecorator implements BonusServiceInterface
{
    public function __construct(protected BonusServiceInterface $bonusService)
    {
    }

    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        $this->bonusService->awardPoints($user, $bonusFactory);
    }
}
