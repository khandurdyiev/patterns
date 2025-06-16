<?php

declare(strict_types=1);

namespace Se\Patterns\v4\final\Chain;

use Se\Patterns\v4\final\Model\Player;

interface RewardHandlerInterface
{
    public function setNext(?RewardHandlerInterface $next): void;

    public function handle(Player $player): void;
}
