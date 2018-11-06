<?php
use DI\ContainerBuilder;

$containerBuilder = new ContainerBuilder();
$containerBuilder->useAutowiring(false);
$containerBuilder->useAnnotations(false);
$containerBuilder->addDefinitions(require_once __DIR__. "/config.php");

return $containerBuilder->build();
