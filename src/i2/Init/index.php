<?php

namespace Se\Patterns\i2\Init;

use Se\Patterns\i2\Init\Model\User;
use Se\Patterns\i2\Init\Service\FirstPurchaseBonusCalculator;
use Se\Patterns\i2\Init\Service\ReferralBonusCalculator;
use Se\Patterns\i2\Init\Service\WelcomeBonusCalculator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

// Granting points for registration.
$welcomeBonusCalculator = new WelcomeBonusCalculator();
$welcomeBonusCalculator->awardPoints($user);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a purchase
$firstPurchaseBonusCalculator = new FirstPurchaseBonusCalculator();
$firstPurchaseBonusCalculator->awardPoints($user);
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a referral
$referralBonusCalculator = new ReferralBonusCalculator();
$referralBonusCalculator->awardPoints($user);
echo "Total: {$user->getPointsBalance()}\n";
