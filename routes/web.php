<?php

use Src\Route;

Route::add('go', [Controller\Site::class, 'go']);
Route::add('hello', [Controller\Site::class, 'hello']);
