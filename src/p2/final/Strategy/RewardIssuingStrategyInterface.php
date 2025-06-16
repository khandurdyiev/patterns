<?php

declare(strict_types=1);

namespace Se\Patterns\p2\final\Strategy;

use Se\Patterns\p2\final\Model\Player;
use Se\Patterns\p2\final\Model\RewardInterface;

interface RewardIssuingStrategyInterface
{
    public function createReward(Player $player): ?RewardInterface;
}
