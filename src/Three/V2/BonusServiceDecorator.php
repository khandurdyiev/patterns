<?php

namespace Se\Patterns\Three\V2;

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
