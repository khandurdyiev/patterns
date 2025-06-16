<?php

namespace Se\Patterns\One\V0;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $user = new User("Valerii");
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";

        $bonusCalculator = new BonusCalculator();

        // Granting points for a registration
        $bonusCalculator->awardPoints($user, 'welcome');
        echo "Total: {$user->getPointsBalance()}\n\n";

        // Granting points for a purchase
        $bonusCalculator->awardPoints($user, 'first_purchase');
        echo "Total: {$user->getPointsBalance()}\n\n";
    }
}

$client = new Client();
$client->run();
