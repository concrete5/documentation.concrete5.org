<?php

use Concrete\Core\Application\Application;

$envPath = __DIR__ . "/../.env";
if (file_exists($envPath)) {
    // Parse the .env file
    (new josegonzalez\Dotenv\Loader($envPath))->parse()->toEnv();
}

/**
 * ----------------------------------------------------------------------------
 * Instantiate concrete5
 * ----------------------------------------------------------------------------
 */
$app = new Application();

/**
 * ----------------------------------------------------------------------------
 * Detect the environment based on the hostname of the server
 * ----------------------------------------------------------------------------
 */
$app->detectEnvironment(
    array(
        'andrew' => array(
            'Andrews-MacBook-Pro.local'
        ),
        'live' => array(
            'documentation.concrete5.org'
        )
    ));

return $app;
