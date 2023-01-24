<?php 
    require_once("/config/routes.php");

    function request_handling($routes) {
        //$path = explode("TheSenseApp", $_SERVER["REQUEST_URI"])[1];
        if(!isset($_GET["page"])) {
            require_once("/src/controllers/pages/homepage.php");
            homepage();
        } else if (!isset($routes[$_GET["page"]])) {
            require_once("/src/controllers/pages/errorpage.php");
            errorpage();
        } else {
            require_once("/src/controllers/pages/".$routes[$_GET["page"]].".php");
            $routes[$_GET["page"]]();
        }
    }

    request_handling($routes);
?>