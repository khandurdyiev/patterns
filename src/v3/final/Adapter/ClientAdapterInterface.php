<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Adapter;

use Se\Patterns\v3\final\Model\RewardInterface;

interface ClientAdapterInterface
{
    public function showReward(RewardInterface $reward): void;
}
