<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 17:28
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $this->routes = include ROOT . "/config/routes.php";
    }

    public function getUri()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    /**
     * @return mixed
     */
    public function run()
    {
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $this->getUri(), $matches)) {
                $controllerPath = preg_replace("~$uriPattern~", $path, $this->getUri());
                $controllerInfo = explode('/',$controllerPath);
                $controllerName = ucfirst(array_shift($controllerInfo)).'Controller';
                $actionName = 'action'.ucfirst(array_shift($controllerInfo));

                $controllerSource = ROOT."/Controllers/{$controllerName}.php";
                if(file_exists($controllerSource)){
                    include_once $controllerSource;
                }

                //создание экземпляра класса
                $controller = new $controllerName;

                //вызов метода с передачей массива в качестве параметров
                call_user_func_array([$controller, $actionName], $controllerInfo);
                break;

            }
        }
    }

}