<?php
/**
 * Copyright © 2019-2019 Capsule Corp, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
require dirname(__DIR__).'/vendor/autoload.php';

$container = new \Slim\Container;
$app = new \Slim\App($container);

$container = $app->getContainer();

$container['HomeController'] = function($c) {
    return new App\Todo\Controllers\HomeController();
};

$pathList[] = dirname(__DIR__) . '/App/*/Routes/Api.php';
$pathList[] = dirname(__DIR__) . '/App/*/Routes/Console.php';
$pathList[] = dirname(__DIR__) . '/App/*/Routes/Web.php';

foreach ($pathList as $path) {
    // Sorting is disabled intentionally for performance improvement
    $files = glob($path, GLOB_NOSORT);
    if ($files === false) {
        throw new \RuntimeException('glob() returned error while searching in \'' . $path . '\'');
    }
    foreach ($files as $file) {
        include $file;
    }
}

ob_end_clean();

$app->run();