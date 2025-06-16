<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\p1\init\Model\Player;
use Se\Patterns\p1\init\Service\GameEventHandler;

$player = new Player(1, 'John Doe');
$handler = new GameEventHandler();

$handler->handle('signup', $player);
$handler->handle('purchase', $player);
$handler->handle('level_completed', $player);
