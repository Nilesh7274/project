<?php
<<<<<<< Updated upstream
include 'conn.php';
 //$conn=mysqli_connect("localhost","root",'','cloud_class'); 
=======
 $conn=mysqli_connect("localhost","root",'','cloud_class'); 
>>>>>>> Stashed changes

  $question=$_REQUEST['question'];
  $option1=$_REQUEST['option1'];
  $option2=$_REQUEST['option2'];
  $option3=$_REQUEST['option3'];
  $option4=$_REQUEST['option4'];
  $correct_option=$_REQUEST['correct_option'];
  
$date=date('y-m-d');
  echo $date;
  
$q="insert into questions values ('','$question','$option1','$option2','$option3','$option4','$correct_option','$date')";
 
  
  $result=mysqli_query($conn,$q);
 print_r(mysqli_affected_rows($conn));
  if($result)
  {
	header('location:add_test1.php');
  }else 
  {
	echo'fail to add question'; 
  }



?>