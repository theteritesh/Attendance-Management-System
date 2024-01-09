<?php
$con=mysqli_connect("localhost", "root", "", "attsystem");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}
// mysql_connect('localhost','root','','attsystem') or die('Cannot connect to server');
// mysql_select_db('attsystem') or die ('Cannot found database');


// mysql_connect("localhost", "root", "", "attsystem") or  die('Cannot connect to server');
// mysql_select_db("attsystem") or die ('Cannot found database');
// if(mysql_connect_errno()){
// echo "Connection Fail".mysqli_connect_error();
// }
?>