<?php

namespace Se\Patterns\i3\Final;

use Se\Patterns\i3\Final\Decorator\BonusServiceDecorator;
use Se\Patterns\i3\Final\Decorator\LoggingBonusServiceDecorator;
use Se\Patterns\i3\Final\Factory\FirstPurchaseBonusFactory;
use Se\Patterns\i3\Final\Factory\ReferralBonusFactory;
use Se\Patterns\i3\Final\Factory\WelcomeBonusFactory;
use Se\Patterns\i3\Final\Model\User;
use Se\Patterns\i3\Final\Service\BonusService;
use Se\Patterns\i3\Final\Service\Logger;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

$bonusService = new BonusServiceDecorator(new BonusService());
$loggingBonusService = new LoggingBonusServiceDecorator(new Logger(), $bonusService);

// Granting points for a registration
$welcomeBonusFactory = new WelcomeBonusFactory();
$loggingBonusService->awardPoints($user, $welcomeBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a purchase
$firstPurchaseBonusFactory = new FirstPurchaseBonusFactory();
$bonusService->awardPoints($user, $firstPurchaseBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a referring a friend
$referralBonusFactory = new ReferralBonusFactory();
$bonusService->awardPoints($user, $referralBonusFactory);
echo "Total: {$user->getPointsBalance()}\n";
