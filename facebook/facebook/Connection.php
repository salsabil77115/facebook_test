<?php

Class Connection {

    protected static $con;
    
    protected function __construct() {}
    
    public static function getInstance() {
        
        if(empty(self::$con)) {
            
            $db_info = array(
                "db_host" => "localhost",
                "db_port" => "3306",
                "db_user" => "root",
                "db_pass" => "",
                "db_name" => "notifi",
                "db_charset" => "UTF-8");
            
            try {
                self::$con = new PDO("mysql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                self::$con->query('SET NAMES utf8');
                self::$con->query('SET CHARACTER SET utf8');
                
            } catch(PDOException $error) {
                echo $error->getMessage();
            }
            
        }
        
        return self::$con;
    }
    
    public static function setCharsetEncoding() {
        if (self::$con == null) {
            self::connect();
        }
        
        self::$con->exec(
            "SET NAMES 'utf8';
			SET character_set_connection=utf8;
			SET character_set_client=utf8;
			SET character_set_results=utf8");
    }

}
?>