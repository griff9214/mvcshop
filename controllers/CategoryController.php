<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 18:25
 */

class CategoryController
{
    public function actionDisplayCategory(int $id, int $page = 1)
    {
        $cat_info = CategoriesModel::getCategory($id);
        $products = ProductModel::getByCategoryId($id, $page);
        $totalProductsInCat = ProductModel::getCountByCat($id)['prodCount'];
        $pagination = new Pagination($totalProductsInCat, $page, ProductModel::$perPage);
        include_once ROOT . "/Views/category/displaycategory.php";
    }
}