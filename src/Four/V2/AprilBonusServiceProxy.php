<?php

namespace Se\Patterns\Four\V2;

readonly class AprilBonusServiceProxy implements BonusServiceInterface
{
    public function __construct(private BonusServiceInterface $bonusService)
    {
    }

    public function awardPoints(User $user, BonusFactory $bonusFactory): void
    {
        if (date('m-d') === '06-15') {
            echo "April joke!\n";
            return;
        }

        $this->bonusService->awardPoints($user, $bonusFactory);
    }
}
