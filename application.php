<?php
class Database {
    protected static $connection ;

    //constructor instantiation
    private function __construct() {
    }

    // Method to get the instance of the class
    public static function getInstance() {
        if (self::$connection === null) {
            try {
                self::$connection = new PDO("mysql:host=127.0.0.1:3307;dbname=debriefing", 'root', '');
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "hhhh" ;
            } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$connection;
    }
}

$db = Database::getInstance();
var_dump($db) ;
$db = Database::getInstance();
var_dump($db) ;


