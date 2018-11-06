<?php

declare(strict_types=1);
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class FormController
{
    private $form;
    private $response;

    public function __construct(string $form, ResponseInterface $response)
    {
        $this->response = $response;
        $this->form = $form;
    }
    
    public function __invoke(): ResponseInterface
    {
        $response = $this->response->withHeader('Content-type', 'text/html');
        $response->getBody()->write(require_once dirname(__DIR__) . "/views/form.php");
        return $response;
    }
}
