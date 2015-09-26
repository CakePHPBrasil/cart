<?php
use Cake\Routing\Router;

Router::connect('/carrinho', ['plugin'=>'Cart', 'controller'=>'Cart', 'action'=>'index']);
Router::connect('/carrinho/:action/*', ['plugin'=>'Cart', 'controller'=>'Cart']);

Router::plugin('Cart', function ($routes) {
	
    $routes->fallbacks('DashedRoute');
});
