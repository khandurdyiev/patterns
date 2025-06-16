<?php

namespace Se\Patterns\i3\Final\Service;

use Se\Patterns\i3\Final\Factory\BonusFactory;
use Se\Patterns\i3\Final\Model\User;

interface BonusServiceInterface
{
    public function awardPoints(User $user, BonusFactory $bonusFactory): void;
}
