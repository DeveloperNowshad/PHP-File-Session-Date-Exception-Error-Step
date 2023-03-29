<?php
//problem 1
session_start();


$_SESSION['username']='John Doe';
$_SESSION['loggedIn']= true;

$username =$_SESSION['username'];
$loggedIn =$_SESSION['loggedIn'];

echo 'Username:'. $username. PHP_EOL;
echo 'Logged In:'. ($loggedIn? 'yes':'No');

//problem 2
session_start();
$_SESSION['counter']= $_SESSION['counter']?? 0;
$_SESSION['counter']++;
echo $_SESSION['counter'];

//problem 3

session_name('my-app');
session_start([
    'cookie_lifetime'=> 200
]);
$_SESSION['name']= 'Ruby';
    echo $_SESSION['name'];

?>