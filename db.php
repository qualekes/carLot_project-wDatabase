<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'Cars' );
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
else {
   echo "";
}
//select a database to work with
$mysqli->select_db("Cars");
 
?>