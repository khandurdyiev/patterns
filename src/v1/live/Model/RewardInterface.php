<?php

declare(strict_types=1);

namespace Se\Patterns\v1\live\Model;

interface RewardInterface
{
    public function issue(Player $player): void;
}
