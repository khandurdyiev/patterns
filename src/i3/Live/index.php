<?php

namespace Se\Patterns\i3\Live;

use Se\Patterns\i3\Live\Factory\FirstPurchaseBonusFactory;
use Se\Patterns\i3\Live\Factory\ReferralBonusFactory;
use Se\Patterns\i3\Live\Factory\WelcomeBonusFactory;
use Se\Patterns\i3\Live\Model\User;
use Se\Patterns\i3\Live\Service\BonusService;
use Se\Patterns\i3\Live\Service\Logger;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

$bonusService = new BonusService(new Logger());

// Granting points for a registration
$welcomeBonusFactory = new WelcomeBonusFactory();
$bonusService->awardPoints($user, $welcomeBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a purchase
$firstPurchaseBonusFactory = new FirstPurchaseBonusFactory();
$bonusService->awardPoints($user, $firstPurchaseBonusFactory);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a referring a friend
$referralBonusFactory = new ReferralBonusFactory();
$bonusService->awardPoints($user, $referralBonusFactory);
echo "Total: {$user->getPointsBalance()}\n";
