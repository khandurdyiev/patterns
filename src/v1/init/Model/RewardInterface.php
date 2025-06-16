<?php

declare(strict_types=1);

namespace Se\Patterns\v1\init\Model;

interface RewardInterface
{
    public function issue(Player $player): void;
}
