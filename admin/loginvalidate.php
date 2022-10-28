<?php 

include 'conn.php'; 

if(isset($_REQUEST['submit']))
{
  $id = $_REQUEST['admin_id'];
  $password = $_REQUEST['admin_password'];

  $id_search="select * from admins where admin_id='$id' ";
  $query=mysqli_query($conn,$id_search);

   $id_count = mysqli_num_rows($query);
   
   if($id_count)
   {
     $id_pass = mysqli_fetch_assoc($query);
     
    

     $db_pass = $id_pass['admin_password'];

     
     //$pass_decode = password_verify($password,$db_pass);
   
        if($password==$db_pass)
        {
          $_SESSION['admin_name'] = $id_pass['admin_name'];  // change here
          $_SESSION['admin_id'] = $id_pass['admin_id'];
          $_SESSION['admin_email'] = $id_pass['admin_email'];
          $_SESSION['admin_phone'] = $id_pass['admin_phone'];
          $_SESSION['admin_dept'] = $id_pass['admin_dept'];
            ?>
            <script>alert('Login Successful'); header("location:index.php");</script> 
            <?php 
            echo "Login Successful";
        }
            else
        {
            ?>
            <script>alert('Invalid Password');</script>
            <?php
            echo "Invalid Password";
        } 
    }
   else
   {
    ?>
    <script>alert('Invalid Rollno');</script>
    <?php
    echo "Invalid Rollno";
   }

} 

?>
