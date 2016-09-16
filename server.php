<?php

use Aura\Di\ContainerBuilder;
use Upscale\HttpServerEngine\DiConfig;
use Zend\Diactoros\Server;

require __DIR__ . '/vendor/autoload.php';

$diBuilder = new ContainerBuilder();
$di = $diBuilder->newConfiguredInstance([
    new DiConfig(__DIR__ . '/config/routes.php'),
], $diBuilder::AUTO_RESOLVE);

/** @var Server $server */
$server = $di->newInstance(Server::class);
$server->listen();
