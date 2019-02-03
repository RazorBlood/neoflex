<?php

namespace application\core;


use application\core\Errors;

class Router {

    private $routes;

    public function __construct() {
        $url = explode('/', $_SERVER['REQUEST_URI']);

        if( !empty($url[1]) && empty($url[2]) )
            return Errors::getError('Неверный путь');

        $this->routes['controller'] = $url[1];
        $this->routes['model']      = $url[2];

        return $this->routes;
    }

    public function run(){
        $path  = $this->routes['controller'] ?
            'application\controllers\\'.ucfirst($this->routes['controller']).'Controller' :
            'application\controllers\MainController' ;

        $model = $this->routes['model'] ?? 'index' ;

        if (class_exists($path)) {
            if (method_exists($path, $model)) {
                $controller = new $path($model);
                $controller->$model();
            } else {
                return Errors::getError('Данного метода нет в контроллере');
            }
        } else {
            return Errors::getError('Контроллер не найден');
        }
    }

}