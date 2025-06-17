<?php

namespace Se\Patterns\i4\Final\Proxy;

use Se\Patterns\i4\Final\Factory\BonusFactory;
use Se\Patterns\i4\Final\Model\User;
use Se\Patterns\i4\Final\Service\BonusServiceInterface;

readonly class AprilBonusServiceProxy implements BonusServiceInterface
{
    public function __construct(private BonusServiceInterface $bonusService)
    {
    }

    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        if (date('m-d') === '06-17') {
            echo "April joke!\n";
            return;
        }

        $this->bonusService->awardPoints($user, $bonusFactory);
    }
}
