<?php

declare(strict_types=1);

namespace App\Handlers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomePageHandler extends RequestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {    
        $this->logger->info('Home page handler dispatched');

        return $this->view->render( $this->response, 'Home/index.twig' );
    }
}
