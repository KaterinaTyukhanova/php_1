<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/all_departments', [Controller\Site::class, 'allDepartments']);
Route::add('GET', '/all_workers', [Controller\Site::class, 'allWorkers']);
Route::add(['GET', 'POST'], '/add_worker', [Controller\Site::class, 'addWorker']);
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'addDepartment']);