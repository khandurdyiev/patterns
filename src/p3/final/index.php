<?php

declare(strict_types=1);

require_once __DIR__ . '/../../../vendor/autoload.php';

use Se\Patterns\p3\final\Model\Player;
use Se\Patterns\p3\final\Model\SignupReward;
use Se\Patterns\p3\final\Service\GameEventHandler;
use Se\Patterns\p3\final\Adapter\UnityClientAdapter;
use Se\Patterns\p3\final\Adapter\UnrealClientAdapter;
use Se\Patterns\p3\final\Adapter\WebClientAdapter;
use Se\Patterns\p3\final\ThirdParty\UnitySDK;
use Se\Patterns\p3\final\ThirdParty\UnrealSDK;
use Se\Patterns\p3\final\ThirdParty\WebSDK;

$player = new Player(1, 'Islam');
$reward = new SignupReward();

// Unity client
$unityAdapter = new UnityClientAdapter(new UnitySDK());
$handlerUnity = new GameEventHandler($unityAdapter);
$handlerUnity->handle($reward, $player);

// Unreal client
$unrealAdapter = new UnrealClientAdapter(new UnrealSDK());
$handlerUnreal = new GameEventHandler($unrealAdapter);
$handlerUnreal->handle($reward, $player);

// Web client
$webAdapter = new WebClientAdapter(new WebSDK());
$handlerWeb = new GameEventHandler($webAdapter);
$handlerWeb->handle($reward, $player);
