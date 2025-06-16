<?php

declare(strict_types=1);

namespace Se\Patterns\v4\final\Service;

use Se\Patterns\v4\final\Model\Player;
use Se\Patterns\v4\final\Chain\RewardHandlerInterface;

class GameEventHandler
{
    public function __construct(
        private readonly RewardHandlerInterface $chain
    ) {}

    public function handle(Player $player): void
    {
        $this->chain->handle($player);
    }
}
