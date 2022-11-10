<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('issues', '\App\Http\Controllers\IssueController@list');
});