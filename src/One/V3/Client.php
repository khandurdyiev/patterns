<?php

namespace Se\Patterns\One\V3;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $user = new User("Valerii");
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";
        $bonusService = new BonusService();

        // Granting points for registration.
        $welcomeBonusFactory = new WelcomeBonusFactory();
        $bonusService->awardBonusToUser($user, $welcomeBonusFactory);
        echo "Balance after registration: {$user->getPointsBalance()}\n\n";

        // Granting points for a purchase
        $firstPurchaseBonusFactory = new FirstPurchaseBonusFactory();
        $bonusService->awardBonusToUser($user, $firstPurchaseBonusFactory);
        echo "Balance after purchase: {$user->getPointsBalance()}\n\n";

        // Granting points for a referral
        $referralBonusFactory = new ReferralBonusFactory();
        $bonusService->awardBonusToUser($user, $referralBonusFactory);
        echo "Balance after referral: {$user->getPointsBalance()}\n";
    }
}

$client = new Client();
$client->run();
