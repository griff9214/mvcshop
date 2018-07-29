<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 21:56
 */

class ProductModel
{
    public static $perPage = 6;

    public static function getByCategoryId(int $id, int $page)
    {
        global $DB;
        $limit = self::$perPage;
        $offset = $limit * ($page - 1);
        $res = $DB->prepare("SELECT * FROM `products` WHERE `category_id` = $id LIMIT $limit OFFSET $offset ");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll(int $page)
    {
        global $DB;
        $limit = self::$perPage;
        $offset = $limit * ($page - 1);
        $res = $DB->prepare("SELECT * FROM `products` WHERE 1 ORDER BY `id` DESC LIMIT $limit OFFSET $offset");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getCountByCat($id)
    {
        global $DB;
        $res = $DB->prepare("SELECT COUNT(*) AS prodCount FROM `products` WHERE `category_id` = $id");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetch(PDO::FETCH_ASSOC);

    }

    public static function getCountAll()
    {
        global $DB;
        $res = $DB->prepare("SELECT COUNT(*) AS prodCount FROM `products` WHERE 1");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetch(PDO::FETCH_ASSOC);

    }

}