<?php

$conn=mysqli_connect('localhost','root','','cloudclass');

$event_id = $_REQUEST['event_id'];

$q = "delete from event where event_id={$event_id}";

$res = mysqli_query($conn,$q);

if(mysqli_affected_rows($conn)>0)
{
    echo "<script> alert('Recorde deleted');</script>";             
    echo '<script>window.location="delete_event.php";</script>';
}
else
{
    echo "<script> alert('Recorde not deleted, please try again');</script>";
}

?>