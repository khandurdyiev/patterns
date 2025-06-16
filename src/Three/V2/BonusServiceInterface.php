<?php

namespace Se\Patterns\Three\V2;

interface BonusServiceInterface
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void;
}
