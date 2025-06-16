<?php

declare(strict_types=1);

namespace Se\Patterns\v3\final\Service;

use Se\Patterns\v3\final\Adapter\ClientAdapterInterface;
use Se\Patterns\v3\final\Model\Player;
use Se\Patterns\v3\final\Model\RewardInterface;

class GameEventHandler
{
    public function __construct(
        private readonly ClientAdapterInterface $clientAdapter
    ) {}

    public function handle(RewardInterface $reward, Player $player): void
    {
        $reward->issue($player);

        $this->clientAdapter->showReward($reward);
    }
}
