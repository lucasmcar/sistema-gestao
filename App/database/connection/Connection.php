<?php

namespace App\database\connection;

class Connection
{
    protected static $instance;

    public static function getConnection()
    {
        if(self::$instance == null){

            try{
                self::$instance = new \PDO("mysql:host=localhost;dbname=restaurauto_gestao", "root", "Lucas1990");
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e){
                echo $e->getMessage();
            }
        }
        
        return self::$instance;
    }
}