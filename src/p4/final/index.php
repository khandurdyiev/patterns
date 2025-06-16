<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\p4\final\Model\Player;
use Se\Patterns\p4\final\Service\GameEventHandler;
use Se\Patterns\p4\final\Chain\PurchaseRewardHandler;
use Se\Patterns\p4\final\Chain\GenericRewardHandler;

// Setup chain
$purchaseHandler = new PurchaseRewardHandler();
$genericHandler = new GenericRewardHandler();

$purchaseHandler->setNext($genericHandler);

// GameEventHandler → працює з Chain
$handler = new GameEventHandler($purchaseHandler);

// Run
$player = new Player(1, 'Islam');
$handler->handle($player);
