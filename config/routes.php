<?php
declare(strict_types=1);

return function (Slim\App $app) {
    $app->get('/crossy-road', \App\Handlers\CrossyRoadHandler::class)->setName('crossy-road');
    $app->get('/spacebar-tower', \App\Handlers\SpacebarTowerHandler::class)->setName('spacebar-tower');
    $app->get('/ping-pong', \App\Handlers\PingPongHandler::class)->setName('ping-pong');
    $app->get('/', \App\Handlers\HomePageHandler::class)->setName('home');
    $app->redirect('/{name}', '/');
};
