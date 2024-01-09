<?php
//establishing connection with database.
$con=mysqli_connect("localhost", "root", "", "attsystem");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
// mysql_connect('localhost','root','') or die('Cannot connect to server');
// mysql_select_db('attsystem') or die ('Cannot found database');

?>