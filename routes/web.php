<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup'])
    ->middleware('admin');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/all_departments', [Controller\Site::class, 'allDepartments']);
Route::add('GET', '/all_workers', [Controller\Site::class, 'allWorkers']);
Route::add(['GET', 'POST'], '/add_worker', [Controller\Site::class, 'addWorker'])
    ->middleware('worker');
Route::add(['GET', 'POST'], '/add_department', [Controller\Site::class, 'addDepartment'])
    ->middleware('worker');
Route::add(['GET'], '/average_age', [Controller\Site::class, 'averageAge'])
    ->middleware('worker');
Route::add(['GET'], '/worker_structure', [Controller\Site::class, 'workerStructure'])
    ->middleware('worker');
Route::add(['GET'], '/worker_department', [Controller\Site::class, 'workerDepartment'])
    ->middleware('worker');
Route::add(['GET'], '/all_worker_all_department', [Controller\Site::class, 'allWorkerAllDepartment'])
    ->middleware('worker');
