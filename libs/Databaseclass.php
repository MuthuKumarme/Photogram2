<?php
class Databaseconn
{
    public static $conn=null;
    public static function getconnection()
    {

        if (Databaseconn::$conn==null) {
            
            $servername =get_config('$db_server');
            $username =get_config('$db_username');
            $password = get_config('$db_password');
            $database = get_config('$db_database');

            
            // Create connectionysqli_connect("mysql.selfmade.ninja", "mkmuthu", "", "mkmuthu_photogram");
            
        
           
            try {
                $connection =mysqli_connect($servername, $username, $password, $database);
            } catch (Exception $th) {
                echo $th->getMessage();
            }
            Databaseconn::$conn=$connection;
            return Databaseconn::$conn;
            //print("\n new connection extablished");
                
                
            
        } else {
            //print("\n exting connection");
            return Databaseconn::$conn;
            
        }

    }
}
