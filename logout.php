<?php
session_start();
//setcookie("username","username",time() -60);
session_destroy();
header('location:index.html#logindiv');
?>