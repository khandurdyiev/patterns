<?php

namespace Se\Patterns\i0\Final;

use Se\Patterns\i0\Final\Factory\BonusPointsFactory;
use Se\Patterns\i0\Final\Model\User;
use Se\Patterns\i0\Final\Service\BonusCalculator;

require_once __DIR__ . '/../../../vendor/autoload.php';

$user = new User("Valerii");
echo "Initial Balance: {$user->getPointsBalance()}\n\n";

$bonusCalculator = new BonusCalculator(new BonusPointsFactory());

// Granting points for a registration
$bonusCalculator->awardPoints($user, 'welcome');
echo "Total: {$user->getPointsBalance()}\n\n";

// Granting points for a purchase
$bonusCalculator->awardPoints($user, 'first_purchase');
echo "Total: {$user->getPointsBalance()}\n\n";
