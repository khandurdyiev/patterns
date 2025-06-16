<?php

namespace Se\Patterns\i4\Final\Service;

use Se\Patterns\i4\Final\Factory\BonusFactory;
use Se\Patterns\i4\Final\Model\User;

interface BonusServiceInterface
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void;
}
