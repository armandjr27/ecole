<?php
require_once dirname(__DIR__) . '/configs/config.php';
abstract class DBConnection 
{
    private static $pdo;

    private static function getConnection()
    {
        $dsn  = 'mysql:host=' . HOST . ';dbname=' . DBNAME;
        $user = USER;
        $pwd  = PASSWORD;

        try 
        {
            self::$pdo = new PDO($dsn, $user, $pwd);
        } catch (PDOException $e) 
        {
            echo "erreur de pdo {$e->getMessage()}";
        }
    }

    protected function getPdo()
    {
        if(self::$pdo === null)
        {
            self::getConnection();
        }

        return self::$pdo;
    }
}