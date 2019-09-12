<?php

$app->get('/todo', 'HomeController:index');

$app->get('/todo/new', 'HomeController:new');

$app->post('/todo', 'HomeController:create');

$app->get('/todo/{id}', 'HomeController:edit');

$app->patch('/todo/{id}', 'HomeController:update');
