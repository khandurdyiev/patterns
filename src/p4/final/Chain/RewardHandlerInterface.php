<?php

declare(strict_types=1);

namespace Se\Patterns\p4\final\Chain;

use Se\Patterns\p4\final\Model\Player;

interface RewardHandlerInterface
{
    public function setNext(?RewardHandlerInterface $next): void;

    public function handle(Player $player): void;
}
