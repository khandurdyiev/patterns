<?php

namespace Se\Patterns\Two\V1;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public function run(): void
    {
        $emailService = new EmailService();
        $logger = new AuditLogger();

        $user = new User("John", 'test@gmail.com');
        echo "Initial Balance: {$user->getPointsBalance()}\n\n";

        // Granting points for registration.
        $welcomeBonusCalculator = new WelcomeBonusCalculator($emailService, $logger);
        $welcomeBonusCalculator->awardPoints($user);
        echo "Balance after registration: {$user->getPointsBalance()}\n\n";

        // Granting points for a purchase
        $firstPurchaseBonusCalculator = new FirstPurchaseBonusCalculator($emailService, $logger);
        $firstPurchaseBonusCalculator->awardPoints($user);
        echo "Balance after purchase: {$user->getPointsBalance()}\n\n";

        // Granting points for a referral
        $referralBonusCalculator = new ReferralBonusCalculator($emailService, $logger);
        $referralBonusCalculator->awardPoints($user);
        echo "Balance after referral: {$user->getPointsBalance()}\n";
    }
}

$client = new Client();
$client->run();
