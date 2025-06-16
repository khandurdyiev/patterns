<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\p2\final\Model\Player;
use Se\Patterns\p2\final\Service\GameEventHandler;
use Se\Patterns\p2\final\Strategy\FixedRewardStrategy;
use Se\Patterns\p2\final\Strategy\LevelBasedRewardStrategy;
use Se\Patterns\p2\final\Model\SignupReward;
use Se\Patterns\p2\final\Model\PurchaseReward;
use Se\Patterns\p2\final\Model\LevelCompletedReward;

$player = new Player(1, 'Islam');

// Fixed strategy → SignupReward
$handler = new GameEventHandler();
$handler->setStrategy(new FixedRewardStrategy(new SignupReward()));
$handler->handle($player);

// Fixed strategy → PurchaseReward
$handler->setStrategy(new FixedRewardStrategy(new PurchaseReward()));
$handler->handle($player);

// Level based strategy
$handler->setStrategy(new LevelBasedRewardStrategy(5));
$handler->handle($player);

$handler->setStrategy(new LevelBasedRewardStrategy(15));
$handler->handle($player);
