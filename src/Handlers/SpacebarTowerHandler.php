<?php

declare(strict_types=1);

namespace App\Handlers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class SpacebarTowerHandler extends RequestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->logger->info('Spacebar Tower handler dispatched');

        return $this->view->render( $this->response, 'Spacebar-Tower/index.twig' );
    }
}
