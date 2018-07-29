<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 17:13
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);
function __autoload($classname)
{
    if (preg_match('~Model~', $classname)) {
        require_once ROOT . "/models/$classname.php";
    } elseif (preg_match('~Controller~', $classname)) {
        require_once ROOT . "/controllers/$classname.php";
    }
}

require_once 'config/config.php';
require_once 'config/db.php';
require_once "components/Router.php";
require_once "components/Pagination.php";
$DB = DB::getConnection();
$router = new Router();
$router->run();
