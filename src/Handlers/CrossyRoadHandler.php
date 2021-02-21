<?php

declare(strict_types=1);

namespace App\Handlers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class CrossyRoadHandler extends RequestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->logger->info('Crossy Road handler dispatched');

        return $this->view->render( $this->response, 'Crossy-Road/index.twig' );
    }
}
