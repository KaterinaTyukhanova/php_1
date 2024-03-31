<?php

namespace Src;

use Exception;

class View
{
    private string $view = '';
    private array $data = [];
    private array $data1 = [];
    private array $data2 = [];
    private string $root = '';
    private string $layout = '/layouts/main.php';

    public function __construct(string $view = '', array $data = [], array $data1 = [], array $data2 = [])
    {
        $this->root = $this->getRoot();
        $this->view = $view;
        $this->data = $data;
        $this->data1 = $data1;
        $this->data2 = $data2;
    }

    private function getRoot(): string
    {
        global $app;
        $root = $app->settings->getRootPath();
        $path = $app->settings->getViewsPath();

        return $_SERVER['DOCUMENT_ROOT'] . $root . $path;
    }

    private function getPathToMain(): string
    {
        return $this->root . $this->layout;
    }

    private function getPathToView(string $view = ''): string
    {
        $view = str_replace('.', '/', $view);
        return $this->getRoot() . "/$view.php";
    }

    public function render(string $view = '', array $data = [], array $data1 = [], array $data2 = []): string
    {
        $path = $this->getPathToView($view);

        if (file_exists($this->getPathToMain()) && file_exists($path)) {

            extract($data,EXTR_PREFIX_SAME, '');

            extract($data1,EXTR_PREFIX_SAME, '');

            extract($data2,EXTR_PREFIX_SAME, '');

            ob_start();
            require $path;

            $content = ob_get_clean();

            return require($this->getPathToMain());
        }
        throw new Exception('Error render');
    }

    public function __toString(): string
    {
        return $this->render($this->view, $this->data, $this->data1, $this->data2);
    }

}
