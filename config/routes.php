<?php

declare(strict_types=1);

use App\Handler\HomePageHandler;
use App\Handler\CrossyRoadHandler;
use Slim\App;

return function (App $app) {
    $app->get('/crossy-road', CrossyRoadHandler::class)->setName('crossy-road');
    $app->get('/[{name}]', HomePageHandler::class)->setName('home');
};
