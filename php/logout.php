<?php

session_start();
$_SESSION['islogined']= false;
session_unset();
session_destroy();
header("location: ../admincp/");

?>