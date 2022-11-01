<?php
session_start();
include 'conn.php';
//$connect=mysqli_connect('localhost','root','','cloudclass');

/*if($connect)
{
	echo"Connected";
}
else
{
	echo" Not Connected";
}
*/
$roll_no=$_REQUEST['roll_no'];
//$_SESSION['roll_no']=$roll_no;



$query_get_roll_no="select * from students where rollno=$roll_no"; 

$res=mysqli_query($conn,$query_get_roll_no);

if(mysqli_num_rows($res)>0)
{
	date_default_timezone_set("Asia/kolkata");

	$date=date('y-m-d');

	$teacher=$_SESSION['admin'];
	$teacher_id=$teacher['admin_id'];
	
	$query_insert_attendance="insert into attendance values(null,'$teacher_id','$roll_no','$date')";

	$result=mysqli_query($conn,$query_insert_attendance);

	if($result)
	{
		echo"<script> alert('INSERTED SUCESSFULY');window.location='attendance-get.php';</script>";
	}
}
else{
	
	echo"<script> alert('INVALID ROLL NO');window.location='attendance-get.php';</script>";
}
?>