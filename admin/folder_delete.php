<?php
include 'conn.php';

$id=$_REQUEST['id'];
$q="delete from notes where id=".$id;
$q2="delete from notes where pr_id=".$id;
//$q="DELETE FROM notes WHERE id=".$id." and pr_id=".$id;
//$q1"delete from notes where pr_id=".$id ;
//DELETE FROM `notes` WHERE id=1 and pr_id=
echo $q;
$res=mysqli_query($conn,$q);
$res2=mysqli_query($conn,$q2);
//$res1=mysqli_query($conn,$q1);
if(mysqli_affected_rows($conn)>0)
{
    echo '<script>alert("Record deleted succesfuly");window.location="file.php";</script>';
}
else
{
    echo '<script>alert("fail to delete Record, plese try again");window.location="file.php";</script>';
}
?>