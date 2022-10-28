<?php

$conn=mysqli_connect('localhost','root','','cloudclass');


$id = $_REQUEST['id'];

$q = "delete from memories where id={$id}";

$res = mysqli_query($conn,$q);

if(mysqli_affected_rows($conn)>0)
{
    echo "<script> alert('Delete memory successfully');</script>";
    echo '<script>window.location="delete_memories.php";</script>';
}
else
{
    echo "<script> alert('This memory is not deleted, please try again');</script>";
}

?>