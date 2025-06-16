<?php

declare(strict_types=1);

namespace Se\Patterns\v4\final\Chain;

use Se\Patterns\v4\final\Model\Player;

abstract class AbstractRewardHandler implements RewardHandlerInterface
{
    private ?RewardHandlerInterface $next = null;

    public function setNext(?RewardHandlerInterface $next): void
    {
        $this->next = $next;
    }

    public function handle(Player $player): void
    {
        if (!$this->process($player) && $this->next !== null) {
            $this->next->handle($player);
        }
    }

    // Кожен конкретний RewardHandler реалізує process()
    abstract protected function process(Player $player): bool;
}
