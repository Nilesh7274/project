<?php

include 'conn.php';
session_start();
    $id=$_REQUEST['id'];

    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    
  
  
   if(isset($_FILES['photo']['name']))
   {
     $tmp_name=$_FILES['photo']['tmp_name'];
    $dest="assets/profile/".$_FILES['photo']['name'];
   
    $res= move_uploaded_file($tmp_name,$dest);
    $photo=$_FILES['photo']['name'];
    
    
    
   }
   if($photo==null)
   {
       $p=$_SESSION['photo'];
   $photo=$p;
   }
   



$q="update students set photo='$photo',admin_email='$email',admin_phone='$phone', where admin_id=".$id;
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