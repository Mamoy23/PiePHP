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
Router::connect('/user/show', ['controller' => 'user', 'action' => 'update' ]);
Router::connect('/user/delete', ['controller' => 'user', 'action' => 'delete' ]);
Router::connect('/user/find', ['controller' => 'user', 'action' => 'find' ]);
Router::connect('/user/logout', ['controller' => 'user', 'action' => 'logout' ]);

Router::connect('/movies', ['controller' => 'movie', 'action' => 'index' ]);
Router::connect('/movies/add', ['controller' => 'movie', 'action' => 'add' ]);
Router::connect('/movies/list', ['controller' => 'movie', 'action' => 'show' ]);
Router::connect('/movies/delete', ['controller' => 'movie', 'action' => 'delete' ]);

Router::connect('/genres', ['controller' => 'genre', 'action' => 'index' ]);
Router::connect('/genres/list', ['controller' => 'genre', 'action' => 'show' ]);
Router::connect('/genres/add', ['controller' => 'genre', 'action' => 'add' ]);
//Router::connect('/film/save', ['controller' => 'film', 'action' => 'save' ]);

//Router::connect('/prices', ['controller' => 'prix', 'action' => 'index', 'prices' => $prices ]);
//Router::connect('/prix', ['controller' => 'prix', 'action' => 'index', 'prices' => $prices ]);