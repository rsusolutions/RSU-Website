
<?php
$servername = "databases.000webhost.com";
$username = "id5082881_rsumysql";
$password = "rsumysql";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

<!-- <?php

// function OpenCon()
// {
//     $dbhost = "databases.000webhost.com";
//     $dbuser = "id5082881_rsu";
//     $dbpass = "rsumysql";
//     $db = "online";
    

//     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


//     return $conn;
// }

// function CloseCon($conn)
// {
//     $conn -> close();
// }

?>
 -->