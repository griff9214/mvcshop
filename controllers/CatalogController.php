<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 18:25
 */

class CatalogController
{
    public function actionDisplayCatalog(int $page = 1)
    {
        $products = ProductModel::getAll($page);
        $totalProducts = ProductModel::getCountAll()['prodCount'];
        $pagination = new Pagination($totalProducts, $page, ProductModel::$perPage);
        include_once ROOT . "/Views/category/displaycategory.php";
    }
}