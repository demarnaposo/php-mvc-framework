<?php


namespace app\Controllers;

use app\core\Application;

class SiteController
{

    public function home()
    {

        $params = [
            "Name" => "Hello Waldemar!",
        ];


        return Application::$app->router->renderView('home', $params);
    }
    public function handleContact()
    {


        return 'Handling Submitted Data';
    }
}
