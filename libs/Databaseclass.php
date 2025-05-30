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
            
        
            $connection =mysqli_connect($servername, $username, $password, $database);
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            } else {
                print("\n new connection extablished");
                Databaseconn::$conn=$connection;
                return Databaseconn::$conn;
                
            }
        } else {
            print("\n exting connection");
            return Databaseconn::$conn;
            
        }

    }
}
