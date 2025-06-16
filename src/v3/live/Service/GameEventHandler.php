<?php

declare(strict_types=1);

namespace Se\Patterns\v3\live\Service;

use Se\Patterns\v3\live\Model\Player;
use Se\Patterns\v3\live\Model\RewardInterface;
use Se\Patterns\v3\live\ThirdParty\UnitySDK;
use Se\Patterns\v3\live\ThirdParty\UnitySDKMessage;
use Se\Patterns\v3\live\ThirdParty\UnrealSDK;
use Se\Patterns\v3\live\ThirdParty\UnrealSDKMessage;
use Se\Patterns\v3\live\ThirdParty\WebSDK;
use Se\Patterns\v3\live\ThirdParty\WebSDKMessage;

class GameEventHandler
{
    public function handle(RewardInterface $reward, Player $player, string $clientType): void
    {
        $reward->issue($player);

        if ($clientType === 'unity') {
            $sdk = new UnitySDK();
            $sdk->displayReward(
               new UnitySDKMessage($reward->getAlias())
            );
        } elseif ($clientType === 'unreal') {
            $sdk = new UnrealSDK();
            $sdk->show(
                new UnrealSDKMessage($reward->getAlias())
            );
        } elseif ($clientType === 'web') {
            $sdk = new WebSDK();
            $sdk->renderReward(
                new WebSDKMessage($reward->getAlias())
            );
        } else {
            throw new \InvalidArgumentException("Unknown client type: {$clientType}");
        }
    }
}
