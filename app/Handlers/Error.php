<?php 

namespace App\Handlers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class Error extends Slim\Handlers\Error
{
    public function __invoke(Request $request, Response $response, \Exception $exception)
    {
        return $response->withStatus(404)
            ->withHeader('Content-Type', 'text/html')
            ->write('Something went wrong!');
    }
}
