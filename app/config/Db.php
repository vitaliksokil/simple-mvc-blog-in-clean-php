<?php


namespace app\config;


use PDO;
use PDOException;

class Db
{
    private $dbConnection;
    public function __construct()
    {
        /* Подключение к базе данных MySQL с помощью вызова драйвера */
        $dsn = 'mysql:dbname=testdb;host=127.0.0.1';
        $user = 'admin';
        $password = '1';
        try {
            $this->dbConnection = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }
    }
    public function getDbConnection(){
        return $this->dbConnection;
    }
}