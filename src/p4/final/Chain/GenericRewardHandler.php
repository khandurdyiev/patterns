<?php

declare(strict_types=1);

namespace Se\Patterns\p4\final\Chain;

use Se\Patterns\p4\final\Model\Player;
use Se\Patterns\p4\final\Model\GenericReward;

class GenericRewardHandler extends AbstractRewardHandler
{
    protected function process(Player $player): bool
    {
        $reward = new GenericReward();
        $reward->issue($player);

        return true; // Завжди успішно
    }
}
