<?php

namespace App\Handlers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class NotFound extends \Slim\Handlers\NotFound
{
    public function __invoke(Request $request, Response $response)
    {
        return $response
            ->withStatus(500)
            ->withHeader('Content-type', 'text/html')
            ->write('Route was not found!');
    }
}
