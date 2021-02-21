<?php

declare(strict_types=1);

namespace App\Handlers;

use Psr\Log\LoggerInterface;
use Slim\Psr7\Response;
use Slim\Views\Twig;

class RequestHandler
{
    protected $view;
    protected $logger;
    protected $response;

    public function __construct(LoggerInterface $logger, Twig $view)
    {
        $this->view     = $view;
        $this->logger   = $logger;
        $this->response = new Response();
    }
}
