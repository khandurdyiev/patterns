<?php

namespace Se\Patterns\Four\V2;

interface BonusServiceInterface
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void;
}
