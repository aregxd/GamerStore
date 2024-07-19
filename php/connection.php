<?php 

$server="localhost";
$username = "root";
$password = "";
$database="gamerstore";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo"
    <script>alert(`Error connecting to server.`)</script>
    ";
}



?>