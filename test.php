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
        print("Construct object\n");

    }
    public function setLight($light)
    {
        $this->light=$light;
    }
    public function getLight()
    {
        return $this->light;
    }

    public function __call($name, $arguments)
    {

       /// $name="getFirstName";
       // $property=preg_replace("/[^0-9a-zA-Z]/","",substr($name,3));
        //$property=strtolower(preg_replace('/\B([A-Z])/','_$1',$property));
        //echo $property;
        print(substr($name, 0, 3));
        print_r($arguments);


    }

}
$m1=new mic;
print(ucwords("\nmuthu kumar\n"));
print(substr("muthukumar", 0, 3));
$m1->setLight("white");
$m1->setblub(array(1,2,3,4,5));
printf("\nLight color is:%s", $m1->getLight());


/*$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
$connection=Databaseconn::getconnection();
*/

?>