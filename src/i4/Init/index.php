<?php

namespace Se\Patterns\i4\Init;

use Se\Patterns\i4\Init\Factory\FirstPurchaseBonusFactory;
use Se\Patterns\i4\Init\Factory\ReferralBonusFactory;
use Se\Patterns\i4\Init\Factory\WelcomeBonusFactory;
use Se\Patterns\i4\Init\Model\User;
use Se\Patterns\i4\Init\Service\BonusService;

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
