<?php

namespace Se\Patterns\Three\V2;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $user = new User("Valerii");
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";

        $bonusService = new BonusService();
        $loggingBonusService = new LoggingBonusServiceDecorator(new Logger(), $bonusService);

        // Granting points for a registration
        $welcomeBonusFactory = new WelcomeBonusFactory();
        $loggingBonusService->awardPoints($user, $welcomeBonusFactory);
        echo "Total: {$user->getPointsBalance()}\n\n";

        // Granting points for a purchase
        $firstPurchaseBonusFactory = new FirstPurchaseBonusFactory();
        $loggingBonusService->awardPoints($user, $firstPurchaseBonusFactory);
        echo "Total: {$user->getPointsBalance()}\n\n";
    }
}

$client = new Client();
$client->run();
