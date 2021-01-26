<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Application\Actions\CmdAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    
    $app->get('/api/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello API ;)');
        return $response;   
    });

    $app->group('/api/users/', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('{id}/', ViewUserAction::class);
    });

    $app->group('/api/cmd/', function (Group $group) {
        
        $group->get('{cmd}/', CmdAction::class);
    });
};
