<?php

declare(strict_types=1);

namespace Se\Patterns\v3\live\Model;

interface RewardInterface
{
    public function issue(Player $player): void;

    public function getAlias(): string;
}
