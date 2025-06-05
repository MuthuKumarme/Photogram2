<?php

class user
{
    private $conn;


    public function __call($name, $arguments)
    {
        
        $property=preg_replace("/[^0-9a-zA-Z]/", "", substr($name, 3));
        $property=strtolower(preg_replace('/\B([A-Z])/', '_$1', $property));
        
        //print($name);
        //print($property);
        if (substr($name, 0, 3)=="get") {
            return $this->_get_data($property);

        } elseif (substr($name, 0, 3)=="set") {
            return $this->_set_data($property, $arguments[0]);

        }
    }
    public static function signup($user, $pass, $email, $phone)
    {
        $options=[
            'cost'=>9,
        ];
        $pass=password_hash($pass, PASSWORD_BCRYPT, $options);
        //print($pass);
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

    public function __construct($username)
    {
        $this->conn= Databaseconn::getconnection();
        $this->username=$username;
        $sql="SELECT `id` FROM `auth` WHERE `username` ='$username'LIMIT 1";
        $result=$this->conn->query($sql);

        if ($result->num_rows) {
            $row=$result->fetch_assoc();
            $this->id=$row['id'];
        } else {
            throw new Exception("Username Does't exists");
        }
    }
    
    //this functions helps retrive the data from the database
    private function _get_data($var)
    {
        if (!$this->conn) {
            $this->conn=Databaseconn::getconnection();
        }
        $sql="SELECT `$var` FROM `users` WHERE `id` =$this->id ";

        $result=$this->conn->query($sql);
        if ($result->num_rows==1) {
            return $result->fetch_assoc()["$var"];
        } else {
            return null;
        }
    }

    //this functions helps set data in the database
    private function _set_data($var, $data)
    {
        if (!$this->conn) {
            $this->conn=Databaseconn::getconnection();
        }
        $sql="UPDATE `users` SET `$var`=`$data` WHERE `id` =$this->id";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    //public function setInstrgramlink($link){
    // return $this->_set_data('instragram',$link);
    //}

    //public function getInstrgramlink(){
    //return $this->_get_data('instragram');
    // }

    
        


}
