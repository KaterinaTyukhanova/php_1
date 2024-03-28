<?php

namespace Controller;

use Model\Post;
use Src\View;
use Src\Request;
use Model\User;
use Src\Auth\Auth;
use Model\Department;
use Model\Worker;


class Site
{
    public function index(): string
    {
        $posts = Post::all();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello');
    }

    public function allDepartments(): string
    {
        $departments = Department::all();
        return new View('site.all_departments', ['departments' => $departments]);
    }

    public function allWorkers(): string
    {
        $workers = Worker::all();
        return new View('site.all_workers', ['workers' => $workers]);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.signup', ['message' => 'Произошла ошибка при регистрации']);
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }

        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }

        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function addWorker(): string
    {
        return new View('site.add_worker');
    }

    public function addDepartment(): string
    {
        return new View('site.add_department');
    }

    public function attachDepartment(): string
    {
        return new View('site.attach_to_depart');
    }

    public function averageAge(): string
    {
        return new View('site.average_age');
    }

    public function workerStructure(): string
    {
        return new View('site.worker_structure');
    }

    public function workerDepartment(): string
    {
        return new View('site.worker_department');
    }
}
