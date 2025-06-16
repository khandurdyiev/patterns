<?php

declare(strict_types=1);

namespace Se\Patterns\v2\init\Model;

interface RewardInterface
{
    public function issue(Player $player): void;
}
