<?php
if(!isset($_SESSION))session_start();
$_SESSION=array();
if (isset($_COOKIE[session_name()])) {
setcookie(session_name(),'',time()-60*60*24*365, '/');
}
session_destroy();
header('Location:index.html');
?>