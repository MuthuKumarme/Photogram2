<?php
include "libs/load.php";
//include_once 'libs/Databaseclass.php';
//include_once 'libs/userclass.php';

/*
print_r("GET METHOD\n");
print_r($_GET);

print_r("POST METHOD\n");
print_r($_POST);

print_r("SERVER METHOD\n");
print_r($_SERVER);

print_r("FILE METHOD\n");
print_r($_FILES);

print_r("COOKIES METHOD\n");
print_r($_COOKIE); */
/*
class mic
{
    public $brand;
    public $color;
    public $model;
    public $price;
    public $light;
    public function __construct()
    {
        print("Construct object");

    }
    public function setLight($light)
    {
        $this->light=$light;
    }
    public function getLight()
    {
        return $this->light;
    }
}
$m1=new mic;
print(ucwords("\nmuthu kumar"));
$m1->setLight("white");
printf("\nLight color is:%s", $m1->getLight());*/


/*$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();*/

$user="";
$pass="";
$result=null;
if (session::get('is_logedin')) {
    $userdata=session::get('session_user');
    print("Wlecome Back ,$userdata[username]");
    $result=$userdata;
} else {
    printf("No session is found....");
    $result=user::login($user, $pass);



    if ($result) {
        
        printf("Login sucessfully<br>,$result[username]");
        session::set('is_logedin',true);
        session::set('session_user',$result);

    } else {
        printf("Login Fail<br>");
    }
}
