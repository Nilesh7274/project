<?php 

include 'conn.php'; 


  $rollno = $_REQUEST['rollno'];
  $password = $_REQUEST['password'];

  $rollno_search="select * from students where rollno='$rollno' ";
  $query=mysqli_query($conn,$rollno_search);

   $rollno_count = mysqli_num_rows($query);
   
   if($rollno_count)
   {
     $rollno_pass = mysqli_fetch_assoc($query);
     
    

     $db_pass = $rollno_pass['password'];

     
     //$pass_decode = password_verify($password,$db_pass);
   
        if($password==$db_pass)
        {
          $_SESSION['name'] = $rollno_pass['name'];  // change here
          $_SESSION['rollno'] = $rollno_pass['rollno'];
          $_SESSION['email'] = $rollno_pass['email'];
          $_SESSION['phone'] = $rollno_pass['phone'];
          $_SESSION['div'] = $rollno_pass['div'];
            ?>
            <script>alert('Login Successful'); location.replace("index.php");</script> 
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



?>