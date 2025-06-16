<?php

namespace Se\Patterns\Four\V2;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
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
    }
}

$client = new Client();
$client->run();
