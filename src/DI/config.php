<?php

use App\Controllers\FileUploadController;
use App\Controllers\FormController;
use Zend\Diactoros\Response;
use function DI\create;
use function DI\get;

return [
    FileUploadController::class => create(FileUploadController::class)
        ->constructor(get('File'), get('Response')),
         'File' => '<h1>File</h1>',
         'Response' => function () {
            return new Response();
         },
    FormController::class => create(FormController::class)
        ->constructor(get('Form'), get('Response')),
         'Form' => '<h1>Form</h1>',
         'Response' => function () {
            return new Response();
         },
];
