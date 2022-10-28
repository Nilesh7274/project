
  <?php include'header.php'; 
  
  $id=0;
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];

}
$q="select * from notes where pr_id='$id'";
$r=mysqli_query($conn,$q);

$count=mysqli_num_rows($r);

  
  ?>
  <!-- ======= Sidebar ======= -->

  <main id="main" class="main">

    <section class="section ">
      <div class="row">
            <!-- Area Chart -->
      <div  class="col-xl-12 col-lg-12 col-md-12">
          <div class="card shadow bg ">
                    <!-- Card Header - Dropdown -->
                    
                    <!-- Card Body -->
                    <div class="card-body pt-4">
                    <div class="row">
                    

                  
                       
                    <?php
                     while($folder=mysqli_fetch_array($r))
                     {
                      if($folder['type']=='folder')
                      {
    
                    ?>
                    <div class="col-md-3">
                        <a href="notes.php?id=<?php echo $folder['id']; ?>">
                      
                        <div class='card border border-2 border-primary'>
                                <div class='card-body'style="text-align: center; " >
                                
                                <i  style="font-size:40px;" class="bi bi-folder-fill bi bi-align-center" > <h5 > <?php echo $folder['name']; ?></h5></i>
                                </div>
                                <a  href="folder_delete.php?id=<?php echo $folder['id']; ?>"><span class="badge rounded-pill bg-danger p-2 ms-2"></span></a>
                     
                        </div>
                            </a>
                      </div>
                            <?php
                      }
                      
                      else{
                        $path="admin/".$folder['path'];
                      ?>
                      
                      <div class="col-md-4 col-sm-6">
                      <div class="card" >
                        <img class="card-img-top w-50 m-auto" src="resource/pdf.png" alt="Card image cap">
                        <div class="card-body">
                          <h6 class="card-title h6"><?php echo $folder["name"];?></h6>
                          <p class="card-text"><?php echo $folder["teacher"];?><br><?php echo $folder['time'];?></p>
                          <a href="<?php echo $path; ?>" class="btn btn-primary">Download</a>
                        </div>
                      </div>
                      
                            
                      </div>

                      
                        <?php
                      }
                    }
                   
                        ?>

                       </div>
                      
                      
           </div>
     
        
                   
                  

    </div>  

      </div>
    </section>





  </main>
  
  <!-- End #main -->
  <?php include'footer.php'; ?>
