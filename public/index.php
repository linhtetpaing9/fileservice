<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Middlewares\FastRoute;
use Middlewares\RequestHandler;
use Relay\Relay;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\SapiEmitter;

$routes =  require_once dirname(__DIR__) . "/src/routes/api.php";
$DIcontainer =  require_once dirname(__DIR__) . "/src/DI/container.php";

$middlewareQueue[] = new FastRoute($routes);
$middlewareQueue[] = new RequestHandler($DIcontainer);

$requestHandler = new Relay($middlewareQueue);

$response = $requestHandler->handle(ServerRequestFactory::fromGlobals());

$emitter = new SapiEmitter();
$emitter->emit($response);
