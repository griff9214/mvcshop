<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 17:41
 */

class SiteController
{
    public function actionIndex()
    {
        require_once ROOT."/Views/site/index.php";
    }
}