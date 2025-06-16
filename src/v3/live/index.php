<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\v3\live\Model\Player;
use Se\Patterns\v3\live\Model\SignupReward;
use Se\Patterns\v3\live\Service\GameEventHandler;

$player = new Player(1, 'Islam');
$handler = new GameEventHandler();

// Fixed signup reward
$handler->handle(new SignupReward(), $player, 'unity');
$handler->handle(new SignupReward(), $player, 'unreal');
$handler->handle(new SignupReward(), $player, 'web');
