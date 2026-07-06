<?php

require_once dirname(__DIR__) . '/core/Router.php';
require_once dirname(__DIR__) . '/core/Controller.php';

// Spl Autoload
spl_autoload_register(function ($class) {
    $root = dirname(__DIR__);
    
    // Map namespaces to directory paths
    $map = [
        'Core\\' => '/core/',
        'App\\'  => '/App/',
    ];

    foreach ($map as $namespace => $path) {
        if (strpos($class, $namespace) === 0) {
            $relative_class = substr($class, strlen($namespace));
            $file = $root . $path . str_replace('\\', '/', $relative_class) . '.php';
            if (is_readable($file)) {
                require $file;
                return;
            }
        }
    }
});

$router = new Core\Router();

// Routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('vehicles', ['controller' => 'Vehicles', 'action' => 'index']);
$router->add('vehicle/{slug}', ['controller' => 'Vehicles', 'action' => 'view']);
$router->add('about', ['controller' => 'About', 'action' => 'index']);
$router->add('contact', ['controller' => 'Contact', 'action' => 'index']);
$router->add('contact/send', ['controller' => 'Contact', 'action' => 'send']);

$router->dispatch($_SERVER['REQUEST_URI'] ?? '');
