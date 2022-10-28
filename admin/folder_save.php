<?php
include 'conn.php';

session_start();


$teacher_name = $_SESSION["admin_name"];
  // echo $teacher_name;

$pr_id=$_REQUEST['pr_id'];

    $q1="select * from notes where id='$pr_id'";
    $ress=mysqli_query($conn,$q1);
    $row=mysqli_fetch_array($ress);
    
    //$date=date('d-m-y h:i:s');
   
if(isset($_FILES['file']))
{

   
//$res= move_uploaded_file($tmp_name,$dest);

$file_name=$_FILES['file']['name'];
$file_tmp =$_FILES['file']['tmp_name'];


$path="notes/".$file_name;
echo $path;


move_uploaded_file($file_tmp,"notes/".$file_name);
//echo" <script>alert(' succesfuly');window.location='file.php?id=$pr_id';</script>";
$type="file";

$q="insert into notes (`id`, `name`, `type`, `pr_id`, `path`, `teacher`) values('','$file_name','$type','$pr_id','$path','$teacher_name')";
$res=mysqli_query($conn,$q);
if($res)
{
   
 echo" <script>alert(' succesfuly');window.location='file.php?id=$pr_id';</script>";
}
else
{
  echo" <script>alert(' not inserted');window.location='file.php?id=$pr_id';</script>";
   
}



}
else
if(isset($_REQUEST['folder']))
{
    $type="folder";
    $folder_name=$_REQUEST['folder'];
 

    


$q="insert into notes (`id`, `name`, `type`, `pr_id`, `path`, `teacher`) values('','$folder_name','$type','$pr_id','','$teacher_name')";
$res=mysqli_query($conn,$q);
if($res)
{
   
  echo" <script>alert(' succesfuly');window.location='file.php?id=$pr_id';</script>";
}
else
{
 echo" <script>alert(' not inserted');window.location='file.php?id=$pr_id';</script>";
   
}
}
?>