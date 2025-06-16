<?php

declare(strict_types=1);

namespace Se\Patterns\v2\final\Service;

use Se\Patterns\v2\final\Model\Player;
use Se\Patterns\v2\final\Strategy\RewardIssuingStrategyInterface;

class GameEventHandler
{
    private RewardIssuingStrategyInterface $strategy;

    public function setStrategy(RewardIssuingStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function handle(Player $player): void
    {
        $reward = $this->strategy->createReward($player);
        $reward?->issue($player);
    }
}
