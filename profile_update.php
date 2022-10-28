<?php

include 'conn.php';
session_start();
    $roll_no=$_REQUEST['rollno'];
    $address=$_REQUEST['address'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    
   $p=$_SESSION['photo'];
  
   if(isset($_FILES['photo']['name']))
   {
     $tmp_name=$_FILES['photo']['tmp_name'];
    $dest="assets/profile/".$_FILES['photo']['name'];
   
    $res= move_uploaded_file($tmp_name,$dest);
    $photo=$_FILES['photo']['name'];
    
    
    
   }
   if($photo==null)
   {
   $photo=$p;
   }
   



$q="update students set photo='$photo',email='$email',phone='$phone',address='$address' where rollno=".$roll_no;
$re=mysqli_query($conn,$q);
if($re)
    {
       echo " <script>alert('Update saved succesfuly');window.location='profile.php';</script>";
    }
    else
    {
       echo"<script>alert('faild to update');window.location='profile.php';</script>";
    }

?>