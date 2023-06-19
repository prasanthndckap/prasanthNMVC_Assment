<?php

class router
{
    public $router = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }



    public function get($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];

    }
    public function post($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];

    }
    public function delete($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];

    }
    public function patch($uri, $action)
    {
        $this->router[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'GET',
            'middleware' => null
        ];

    }


    public function routing()
    {
        foreach ($this->router as $router) {
            if ($router['uri']==$_SERVER['REQUEST_URI']){
                if ($router['action']) {
                    switch ($router['action']) {
                        case 'create':
                            $this->controller->addproduct($_POST,$_FILES['image']);
                            break;
                        case 'edit':
                            $this->controller->edit($_POST);
                            break;
                        case 'delete':
                            $this->controller->delete($_POST['delete']);
                            break;
                        case 'view':
                            $this->controller->viewOneUser($_POST['view']);
                            break;
                        default:
                            $this->controller->gettingAllUser();
                    }

                } else {
                    $this->controller->getting_all_user();
                }

            }

        }

    }
}



