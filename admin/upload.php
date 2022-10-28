<?php



include 'header.php';

if(!isset($_SESSION['name']))
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

      
    
    <div class="row">
        
            <!-- Area Chart -->
      <div  class="col-xl-12 col-lg-12">
          <div  style="overflow-y:scroll ;" class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                   
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">
                          DS Notes
                          
                        </h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                           
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div  class="card-body overflow-y" id="chat" style="height: 400px; overflow-y:scroll;">
                    

                    <select class="custom-select custom-select-lg mb-3">
                        <option selected>Open this select menu</option >
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select><br>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Folder Name</label>
                            <input type="text"  name="folder"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                       
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                
                    <style>
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}

/* Optional: show position indicator in red */


                      </style>
                          
                    
                  

    </div>  

      </div>
    </section>

  </main><!-- End #main -->

  <?php
   include 'footer.php';
?>