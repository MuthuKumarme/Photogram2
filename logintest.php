<?php
include 'libs/load.php';

$user="Muthukumar";
$pass="muthukumar";
$result=null;

if (isset($_GET['logout'])) {
    session::destroy();
    die("Session Destroy,<a href='login.php'>Login again</a>");
}
if (session::get('is_logedin')) {
    $username=session::get('session_username');
    $userobj=new user($username['username']);
    
    
    echo "Wlecome Back:".$userobj->getBio();
    echo "<br>Wlecome Avatar:".$userobj->getAvatar();
    echo "<br>Wlecome FirstName:".$userobj->getFirstname();
    echo "<br>Wlecome LastName:".$userobj->getLastname();
    //echo "<br>Wlecome LastName:".$userobj->setLastname();



} else {
    print("No session is found....");
    $result=user::login($user, $pass);
    
    //print($result['password']);
    //print($userobj);
    
    if ($result!==false) {
        session::set('is_logedin', true);
        session::set('session_username', $user);
        session::set('session_username', $result);
        $userobj=new user($user);
   
        echo "Login sucessfully".$userobj->getUsername();
        

    } else {
        echo "Login Fail,$user <br>";
        

        
    }
}
echo <<<EOL
<br><br><a href="logintest.php?logout">Logout</a>
EOL;
