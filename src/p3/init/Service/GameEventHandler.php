<?php

declare(strict_types=1);

namespace Se\Patterns\p3\init\Service;

use Se\Patterns\p3\init\Model\Player;
use Se\Patterns\p3\init\Model\RewardInterface;
use Se\Patterns\p3\init\ThirdParty\UnitySDK;
use Se\Patterns\p3\init\ThirdParty\UnitySDKMessage;
use Se\Patterns\p3\init\ThirdParty\UnrealSDK;
use Se\Patterns\p3\init\ThirdParty\UnrealSDKMessage;
use Se\Patterns\p3\init\ThirdParty\WebSDK;
use Se\Patterns\p3\init\ThirdParty\WebSDKMessage;

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
