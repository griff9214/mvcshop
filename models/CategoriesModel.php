<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 19:42
 */
class CategoriesModel
{
    public static function getAll()
    {
        global $DB;
        $res = $DB->prepare("SELECT * FROM `categories` WHERE 1 ORDER BY `sort_order` ASC");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return  $res->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getCategory(int $id){
        global $DB;
        $res = $DB->prepare("SELECT * FROM `categories` WHERE `id` = $id");
        $res->execute();
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}