<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 18:12
 */

class ProductController
{
    public function actionDisplayItem(int $id)
    {
        require_once ROOT . "/Views/product/DisplayItem.php";
    }
}