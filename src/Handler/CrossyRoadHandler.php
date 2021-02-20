<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Psr\Log\LoggerInterface;
use Slim\Psr7\Response;

class CrossyRoadHandler implements RequestHandlerInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->logger->info('Crossy Road handler dispatched');

        $response = new Response();
        $view = \Slim\Views\Twig::create( __DIR__ . '/../Views', [ 'cache' => false ] );

        return $view->render( $response, 'Crossy-Road/index.twig', [] );
    }
}
