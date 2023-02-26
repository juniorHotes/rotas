<?php
namespace app\controllers;

use League\Plates\Engine;

/**
 * Carrecamento de Views
 */
class Controller {

    public static function view(string $view, array $params = []) {

        $viewsPath = dirname(__FILE__, 2) . "/views";

        if(!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . '.php')) {
            throw new \Exception("A view {$view} não existe");
        }

        $templates = new Engine($viewsPath);
        echo $templates->render($view, $params);
    }
}