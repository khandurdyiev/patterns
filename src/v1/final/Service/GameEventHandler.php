<?php

declare(strict_types=1);

namespace Se\Patterns\v1\final\Service;

use Se\Patterns\v1\final\Factory\RewardFactory;
use Se\Patterns\v1\final\Model\Player;

class GameEventHandler
{
    public function handle(string $eventType, Player $player): void
    {
        $reward = RewardFactory::create($eventType);
        $reward->issue($player);
    }
}
