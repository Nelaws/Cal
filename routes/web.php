<?php

use Src\Route;

Route::add('GET', '/', [Controller\Site::class, 'hello']);
Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/find', [Controller\Site::class, 'find'] );
Route::add('GET', '/add_user', [Controller\Site::class, 'add']);