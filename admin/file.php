<?php



include 'header.php';
$id=0;
if(isset($_REQUEST['id']))
{
    $id=$_REQUEST['id'];

}
$q="select * from notes where pr_id='$id'";
$r=mysqli_query($conn,$q);



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
          <div   class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                  
                    <!-- Card Body -->
                    <div  class="card-body overflow-y:scroll" id="chat" style="height: auto; overflow-y:scroll;">
                    

                   <br>
                   <div class="row">
                    <div class="col-md-3 ">
                    <form action="folder_save.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Folder Name</label>
                            <input type="hidden" name='pr_id' value='<?php echo  $id; ?>'>
                            <input type="text"  name="folder" class="form-control col-md-4" placeholder="Enter folder name">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                       
                        
        
                    </form>
                </div>
                
                <div class="col">
                <form action="folder_save.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Folder Name</label>
                            <input type="hidden" name='pr_id' value='<?php echo  $id; ?>'>
                            <input type="file"  name="file" class="form-control col-md-4" required placeholder="Enter folder name">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                       
                        
        
                    </form>
                </div>
</div>
                    <br>
                    <br>
                    <div class="row">
                     <?php
                     while($folder=mysqli_fetch_array($r))
                     {
                      if($folder['type']=='folder')
                      {
                     ?>
                        
                        <div class=col-md-3>
                        <a href="file.php?id=<?php echo $folder['id']; ?>">
                      
                        <div class='card border border-2 border-primary '>
                                <div class='card-body'style="text-align: center; " >
                                
                                <i  style="font-size:40px;" class="bi bi-folder-fill bi bi-align-center" > <h5 > <?php echo $folder['name']; ?></h5></i>
                                </div>
                                <a  href="folder_delete.php?id=<?php echo $folder['id']; ?>"><span class="badge rounded-pill bg-danger p-2 ms-2">Delete</span></a>
                     
                            </div>
                            </a>
                     
                        </div>
                        <?php
                      }
                      else
                      { $path=$folder['path'];
                        ?>
                      <div class="col-md-4 col-sm-6">
                       <div class="card" >
                        <img class="card-img-top w-50 m-auto" src="../resource/pdf.png" alt="Card image cap">
                        <div class="card-body">
                          <h6 class="card-title h6"><?php echo $folder["name"];?></h6>
                          <p class="card-text"><?php echo $folder["teacher"];?><br><?php echo $folder['time'];?></p>
                          
                          <a href="<?php echo $path; ?>" class="btn btn-primary">Download</a>

                          <a onclick='return confirm(\"are u sure want to delete this Record ?\");' href='folder_delete.php?id=<?php echo $folder["id"];?>'>Delete</a>
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
    </section>

  </main><!-- End #main -->

  <?php
   include 'footer.php';
?>