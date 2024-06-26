<?php
namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

    class WorkerMiddleware
{
    public function handle(Request $request)
    {
        if (!Auth::checkWorker()) {
            app()->route->redirect('/hello');
        }
    }
}

