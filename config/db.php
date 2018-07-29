<?php


class DB {

    public static function getConnection()
    {
        $dbparams = include 'dbparams.php';
        $db_login = $dbparams['user'];
        $db_pass = $dbparams['password'];
        $db_name = $dbparams['dbname'];

        $dsn = "mysql:host=localhost;dbname=$db_name";
        return new PDO($dsn, $db_login, $db_pass);
    }
}
