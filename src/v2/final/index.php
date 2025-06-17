<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\v2\final\Model\Player;
use Se\Patterns\v2\final\Service\GameEventHandler;
use Se\Patterns\v2\final\Strategy\FixedRewardStrategy;
use Se\Patterns\v2\final\Strategy\LevelBasedRewardStrategy;
use Se\Patterns\v2\final\Model\SignupReward;
use Se\Patterns\v2\final\Model\PurchaseReward;
use Se\Patterns\v2\final\Model\LevelCompletedReward;

$player = new Player(1, 'Islam');

// Fixed strategy → SignupReward
$handler = new GameEventHandler();
$handler->setStrategy(new FixedRewardStrategy(new SignupReward()));
$handler->handle($player);

// Fixed strategy → PurchaseReward
$handler->setStrategy(new FixedRewardStrategy(new PurchaseReward()));
$handler->handle($player);

// Level based strategy
$handler->setStrategy(new LevelBasedRewardStrategy());
$handler->handle($player);

$player->setLevel(15);
$handler->handle($player);
