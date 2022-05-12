<?php

return[
    'auth'=> \Src\Auth\Auth::class,
    'identify'=>\Model\User::class,
    'routeMiddleware' => [
        'auth' => \Middlewares\AuthMiddleware::class,
]
];