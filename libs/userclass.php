<?php
class user
{
    private $conn;
    public static function signup($user, $pass, $email, $phone)
    {
        $options=[
            'cost'=>9,
        ];
        $pass=password_hash($pass,PASSWORD_BCRYPT,$options);
        print($pass);
        $conn=Databaseconn::getconnection();
        $sql = "INSERT INTO `auth` (`username`,`password`, `email`,`phone`)
        VALUES ('$user', '$pass', '$email','$phone')";
        $result=false;
        try {
            $conn->query($sql);
            $result=true;
           
        } catch (Exception $e) {
            echo "Error : ".$sql."<br>".$conn->error;
            $result=false;
        }

        //$conn->close();
        return $result;
    }

    public static function login($user, $pass)
    {
        //$pass=md5($pass);
        $query="SELECT * FROM `auth` WHERE `username`='$user'";
        $conn=Databaseconn::getconnection();
        $result=$conn->query($query);

          if ($result->num_rows==1) {
          
            $row=$result->fetch_assoc();
    
            //if ($row['password']==$pass) {
            if (password_verify($pass, $row['password'])) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    
   

    }


}
