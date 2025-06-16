<?php

namespace Se\Patterns\i4\Live;

use Se\Patterns\i4\Live\Factory\FirstPurchaseBonusFactory;
use Se\Patterns\i4\Live\Factory\ReferralBonusFactory;
use Se\Patterns\i4\Live\Factory\WelcomeBonusFactory;
use Se\Patterns\i4\Live\Model\User;
use Se\Patterns\i4\Live\Service\BonusService;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

$bonusService = new BonusService();

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
