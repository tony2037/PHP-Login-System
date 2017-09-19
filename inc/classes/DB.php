<?php
    if(!defined('__CONFIG__')){
        exit("Your are not allowed to be here ");
    }

    class DB{
        protected static $con;
        private function __construct(){
            //$charset = "utf8md4";
            $servername = "localhost";
            $port = 3306;
            //$dbname = "login_course";
            $username = "tony2037";
            $password = "tony2037";
            
            try{
                self::$con = new PDO('mysql:hostname=$servername;port=$port;dbname=login_course', $username , $password);
                self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$con->setAttribute( PDO::ATTR_PERSISTENT, false);
            }catch(PDOException $e){
                echo "Could not connect to database.\r\n";
                exit;
            }
        }
        public static function getConnection(){
            //If this instance is not been started. start it.
            if(!self::$con){
                new DB();
            }

            //Return a writable DB connection
            return self::$con;
        }
    }
?>