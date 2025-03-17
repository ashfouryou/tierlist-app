<?php 

require_once('../config.php');


class Database {

    private static $instance = null;
    private $pdo;

    private function __construct(){
        $dsn = "mysql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME."";
        $options = array(
             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
             PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          );
        try {
            $this->pdo = new PDO($dsn,DB_USERNAME,DB_PASSWORD,$options);
        } catch (PDOException $e) {
            die("Connection Failed ".$e->getMessage()."");
        }
    }
    public static function getInstance(){
        if(self::$instance===null){
           self::$instance = new Database();
        }
        return self::$instance;
    }
    public function getConnection(){
         return $this->pdo;
    }
}
// New 1st object
$conn = Database::getInstance();
?>
