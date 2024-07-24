<?php 

$server="localhost";
$username = "root";
$password = "";
$database="gamerstore";


// $server="sql105.infinityfree.com";
// $username = "if0_36938250";
// $password = "vKPStZ6sAdg";
// $database="if0_36938250_gamerstoredb";

$conn = mysqli_connect($server,$username,$password,$database);
if(!$conn){
    echo"
    <script>alert(`Error connecting to server.`)</script>
    ";
}



?>