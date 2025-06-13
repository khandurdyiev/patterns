<?php

namespace Se\Patterns\One\V2;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $user = new User("Valerii");
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";

        // Granting points for registration.
        $welcomeBonusCalculator = new WelcomeBonusCalculator();
        $welcomeBonusCalculator->awardPoints($user);
        echo "Balance after registration: {$user->getPointsBalance()}\n\n";

        // Granting points for a purchase
        $firstPurchaseBonusCalculator = new FirstPurchaseBonusCalculator();
        $firstPurchaseBonusCalculator->awardPoints($user);
        echo "Balance after purchase: {$user->getPointsBalance()}\n\n";

        // Granting points for a referral
        $referralBonusCalculator = new ReferralBonusCalculator();
        $referralBonusCalculator->awardPoints($user);
        echo "Balance after referral: {$user->getPointsBalance()}\n";
    }
}

$client = new Client();
$client->run();
