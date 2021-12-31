<?php
$tablename= $_POST['timetablename'];

$subject1= $_POST['subject1'];
$time1= $_POST['time1'];
$day1= $_POST['day1'];

$subject2= $_POST['subject2'];
$time2= $_POST['time2'];
$day2= $_POST['day2'];

$subject3= $_POST['subject3'];
$time3= $_POST['time3'];
$day3= $_POST['day3'];

$subject4= $_POST['subject4'];
$time4= $_POST['time4'];
$day4= $_POST['day4'];

$subject5= $_POST['subject5'];
$time5= $_POST['time5'];
$day5= $_POST['day5'];

$subject6= $_POST['subject6'];
$time6= $_POST['time6'];
$day6= $_POST['day6'];

$subject7= $_POST['subject7'];
$time7= $_POST['time7'];
$day7= $_POST['day7'];

$id=$_POST['id'];

include "./connect.php";

$query = "UPDATE `gen_timetable` SET `name_of_timetable`='$tablename',`subject1`='$subject1',`time1`='$time1',`day1`='$day1',
`subject2`='$subject2',`time2`='$time2',`day2`='$day2',
`subject3`='$subject3',`time3`='$time3',`day3`='$day3',
`subject4`='$subject4',`time4`='$time4',`day4`='$day4',
`subject5`='$subject5',`time5`='$time5',`day5`='$day5',
`subject6`='$subject6',`time6`='$time6',`day6`='$day6',
`subject7`='$subject7',`time7`='$time7',`day7`='$day7' WHERE id = '$id'";
$result = mysqli_query($conn,$query);
if($result)
{
    $success = 'Timetable has been edited successfully';
    include ('select.php');
    exit;
}
else{
    $error = 'Could not run query';
    include ('edit-timetable.php');
    exit;
}




?>