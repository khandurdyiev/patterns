<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\p3\init\Model\Player;
use Se\Patterns\p3\init\Model\SignupReward;
use Se\Patterns\p3\init\Service\GameEventHandler;

$player = new Player(1, 'Іслам');
$handler = new GameEventHandler();

// Fixed signup reward
$handler->handle(new SignupReward(), $player, 'unity');
$handler->handle(new SignupReward(), $player, 'unreal');
$handler->handle(new SignupReward(), $player, 'web');