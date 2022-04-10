<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * @return string
     */
    private function getURI()
    {

        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }

    }

    public function run()
    {

        // Получить строку запроса
        $uri = $this->getURI();

        if ($uri === 'test') {
            require_once ROOT . "/test.php";
            die();
        }

        // Проверить наличие такого запроса routes.php
        foreach ($this->routes as $uriPattern => $path) {

            // Сравниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {
//                var_dump($uri);
//                var_dump($uriPattern);
//                var_dump($path);
//                echo '<hr>';

//                echo '<p>Где ищем (запрос, который набрал пользователь): ' . $uri . '</p>';
//                echo '<p>Что ищем (совпадение из правила): ' . $uriPattern . '</p>';
//                echo '<p>Кто обрабатывает: ' . $path . '</p>';

                // Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

//                echo '<br><p>Нужно сформировать: ' . $internalRoute . '</p>';

                // Определить какой контроллер
                // и action обрабатывает запрос

                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments)) . 'Controller';
                $actionName = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                // Подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;
//                $result = $controllerObject->$actionName($parameters);
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if ($result != null) {
                    die();
                }
            }

        }

    }
}