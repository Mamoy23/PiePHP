<?php 
use Core\Router;

// $prices = [
//     'pommes' => 3,
//     'tomates' => 3,
//     'cerises' => 3
// ];

Router::connect('/', ['controller' => 'app', 'action' => 'index' ]);
Router::connect('/app', ['controller' => 'app', 'action' => 'index' ]);
Router::connect('/user', ['controller' => 'user', 'action' => 'index' ]);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add' ]);
Router::connect('/user/login', ['controller' => 'user', 'action' => 'login' ]);
Router::connect('caca/pipi/prout', ['controller' => 'caca']);
//Router::connect('/prices', ['controller' => 'prix', 'action' => 'index', 'prices' => $prices ]);
//Router::connect('/prix', ['controller' => 'prix', 'action' => 'index', 'prices' => $prices ]);