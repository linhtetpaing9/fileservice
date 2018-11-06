<?php

use App\Controllers\FileUploadController;
use App\Controllers\FormController;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

return simpleDispatcher(function (RouteCollector $r) {
    $r->get('/upload', FileUploadController::class);
    $r->get('/form', FormController::class);
});
