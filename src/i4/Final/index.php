<?php

namespace Se\Patterns\i4\Final;

use Se\Patterns\i4\Final\Factory\FirstPurchaseBonusFactory;
use Se\Patterns\i4\Final\Factory\WelcomeBonusFactory;
use Se\Patterns\i4\Final\Model\User;
use Se\Patterns\i4\Final\Proxy\AprilBonusServiceProxy;
use Se\Patterns\i4\Final\Service\BonusService;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

$bonusService = new AprilBonusServiceProxy(new BonusService());

// Granting points for a registration
$welcomeBonusFactory = new WelcomeBonusFactory();
$bonusService->awardPoints($user, $welcomeBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a purchase
$firstPurchaseBonusFactory = new FirstPurchaseBonusFactory();
$bonusService->awardPoints($user, $firstPurchaseBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";
