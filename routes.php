<?php 
use Core\Router;

Router::connect('/', ['controller' => 'app', 'action' => 'index' ]);
Router::connect('/app', ['controller' => 'app', 'action' => 'index' ]);

Router::connect('/user', ['controller' => 'user', 'action' => 'index' ]);
Router::connect('/user/signin', ['controller' => 'user', 'action' => 'vue' ]);
Router::connect('/user/add', ['controller' => 'user', 'action' => 'add' ]);
Router::connect('/user/login', ['controller' => 'user', 'action' => 'login' ]);
Router::connect('/user/show', ['controller' => 'user', 'action' => 'update' ]);
Router::connect('/user/delete', ['controller' => 'user', 'action' => 'delete' ]);
Router::connect('/user/find', ['controller' => 'user', 'action' => 'find' ]);
Router::connect('/user/logout', ['controller' => 'user', 'action' => 'logout' ]);

Router::connect('/movies', ['controller' => 'movie', 'action' => 'index' ]);
Router::connect('/movies/add', ['controller' => 'movie', 'action' => 'add' ]);
Router::connect('/movies/list', ['controller' => 'movie', 'action' => 'show' ]);
Router::connect('/movies/update', ['controller' => 'movie', 'action' => 'update' ]);
Router::connect('/movies/delete', ['controller' => 'movie', 'action' => 'delete' ]);

Router::connect('/genres', ['controller' => 'genre', 'action' => 'index' ]);
Router::connect('/genres/list', ['controller' => 'genre', 'action' => 'show' ]);
Router::connect('/genres/add', ['controller' => 'genre', 'action' => 'add' ]);
Router::connect('/genres/delete', ['controller' => 'genre', 'action' => 'delete' ]);
Router::connect('/genres/update', ['controller' => 'genre', 'action' => 'update' ]);

Router::connect('/histo/list', ['controller' => 'histo', 'action' => 'show' ]);
Router::connect('/histo/add', ['controller' => 'histo', 'action' => 'add' ]);
Router::connect('/histo/delete', ['controller' => 'histo', 'action' => 'delete' ]);