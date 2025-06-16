<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\v2\live\Model\Player;
use Se\Patterns\v2\live\Service\GameEventHandler;

$player = new Player(1, 'Islam');

$handler = new GameEventHandler();

// Fixed signup reward
$handler->handle('signup_fixed', $player);

// Fixed purchase reward
$handler->handle('purchase_fixed', $player);

// Level-based purchase reward
$handler->handle('levelbased_purchase', $player, 5);
$handler->handle('levelbased_purchase', $player, 15);
