<?php



include 'header.php';

if(!isset($_SESSION['student']))
{
 // echo "You Are LogOut";
  header('location:login.php');
}


?>


<main id="main" class="main">

<div class="pagetitle">
  
  <nav>
    <ol class="breadcrumb">
      
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">
  
  </div>
</section>

</main><!-- End #main -->


<?php
   include 'footer.php';
?>