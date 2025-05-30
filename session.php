<?php
include "libs/load.php";

setcookie("muthukumar", "this is sample");
printf("Session in PHP<br>");
// if  the variable is maintained the one session to another session is called session;

//A is not intilize so not implement the if part.
/*if($a){
    printf("A is Already Exists:$a<br>");
}else{
    //assiging the value a.
    $a=time();
    printf("Assigining value of a:$a<br<br>");
}

//using session to maintened the state of variable.*/
print("<br>After Using Sesssion<br>");
//print_r($_SESSION);
if (isset($_GET['clear'])) {
    session::unset();
}
if (isset($_GET['destroy'])) {
    session::destroy();
}
if (session::isset('a')) {
    printf("A is Already exitist:$_SESSION[a]<br>");
} else {
    session::set('a', time());
    printf("Assigining value of a:<br>".session::get('a'));
}
