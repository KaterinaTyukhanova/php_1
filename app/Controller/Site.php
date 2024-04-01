<?php

namespace Controller;


use Src\View;
use Src\Request;
use Src\Auth\Auth;
use Src\Validator\Validator;

use Model\Post;
use Model\User;
use Model\Department;
use Model\Worker;
use Model\Doljnost;
use Model\Structure;
use Model\TypesDepartment;


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

    //public function signup(Request $request): string
    //{
        //if ($request->method === 'POST' && User::create($request->all())) {
            //app()->route->redirect('/hello');
        //}
        //return new View('site.signup');
    //}

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), [
                'name' => ['required'],
                'login' => ['required', 'unique:users,login'],
                'password' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/hello');
            }
        }
        return new View('site.signup');
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

    public function addWorker(Request $request): string
    {
        $doljnosts = Doljnost::all();
        $departments = Department::all();
        $structures = Structure::all();
        if ($request->method === 'POST' && Worker::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_worker', ['departments' => $departments], ['doljnosts' => $doljnosts], ['structures' => $structures]);
    }


    public function addDepartment(Request $request): string
    {
        $typesdepartments = TypesDepartment::all();
        if ($request->method === 'POST' && Department::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.add_department', ['typesdepartments' => $typesdepartments]);
    }

    public function averageAge(): string
    {
        $departments = Department::all();

        if(!empty($_GET['department']))
        {
            $department_id = $_GET['department'];
            $workers = Worker::where('id_department', $department_id)->get();
            return new View('site.average_age', ['departments' => $departments], ['workers' => $workers]);
        }
        return new View('site.average_age', ['departments' => $departments]);
    }

    public function workerStructure(): string
    {
        $structures = Structure::all();

        if(!empty($_GET['structure']))
        {
            $structure_id = $_GET['structure'];
            $workers = Worker::where('id_structure', $structure_id)->get();
            return new View('site.worker_structure', ['structures' => $structures], ['workers' => $workers]);
        }
        return new View('site.worker_structure', ['structures' => $structures]);
    }

    public function workerDepartment(): string
    {
        $departments = Department::all();

        if(!empty($_GET['department']))
        {
            $department_id = $_GET['department'];
            $workers = Worker::where('id_department', $department_id)->get();
            return new View('site.worker_department', ['departments' => $departments], ['workers' => $workers]);
        }
        return new View('site.worker_department', ['departments' => $departments]);
    }
}
