<?php
use Cake\Routing\Router;

Router::plugin('Cart', function ($routes) {
    $routes->fallbacks('DashedRoute');
});
