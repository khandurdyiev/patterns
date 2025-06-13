<?php

namespace Se\Patterns\Two\V1;

class EmailService
{
    public function sendBonusNotification(User $user, Bonus $bonus): void
    {
        $recipient = $user->getEmail();
        $points = $bonus->getPoints();

        echo "EmailService: Email about reward {$points} points successfully sent for user {$recipient}!\n";
    }
}
