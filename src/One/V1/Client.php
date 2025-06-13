<?php

namespace Se\Patterns\One\V1;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $user = new User("Valerii");
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";

        $bonusManager = new BonusManager();

        // Нараховуємо бали за реєстрацію
        $bonusManager->awardPoints($user, 'welcome');
        echo "Баланс після реєстрації: {$user->getPointsBalance()}\n\n";

        // Нараховуємо бали за покупку
        $bonusManager->awardPoints($user, 'first_purchase');
        echo "Баланс після покупки: {$user->getPointsBalance()}\n";
    }
}

$client = new Client();
$client->run();
