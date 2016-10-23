<?php
// route define path for api test view point
$app->get('/api/v1/viewpoint', '\App\Controller\Api\V1\ViewPointController:index');
$app->get('/api/v1/user', '\App\Controller\Api\V1\UserController:index');
