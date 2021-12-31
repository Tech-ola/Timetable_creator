<?php 
$id =  $_GET['id'];
include('./connect.php');


$query = "delete from gen_timetable where id = '$id'";
$result = mysqli_query($conn,$query);

$success = 'Successfully deleted';
echo $success;
include('./select.php');
?>