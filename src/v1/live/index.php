<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\v1\live\Model\Player;
use Se\Patterns\v1\live\Service\GameEventHandler;

$player = new Player(1, 'Islam');
$handler = new GameEventHandler();

$handler->handle('signup', $player);
$handler->handle('purchase', $player);
$handler->handle('level_completed', $player);
