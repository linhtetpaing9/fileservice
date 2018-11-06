<?php

declare(strict_types=1);
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;

class FileUploadController
{
    private $file;
    private $response;

    public function __construct(string $file, ResponseInterface $response)
    {
        $this->file = $file;
        $this->response = $response;
    }
    
    public function __invoke(): ResponseInterface
    {
        // var_dump($response);
        $response = $this->response->withHeader('Content-type', 'text/html');
        $response->getBody()->write(require_once dirname(__DIR__) . "/views/file.php");
        return $response;
    }
}
