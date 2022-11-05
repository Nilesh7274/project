<?php
    include "header.php";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $event = $_POST["event_name"];
        $temp_name = $_FILES["event_pic"]["tmp_name"];
        $dest = "memories/".$_FILES['event_pic']["name"];

        echo $u = move_uploaded_file($temp_name,$dest);

        include 'conn.php';

        $q = "insert into memories(event_name,img_path) values('$event','$dest')";
        $res = mysqli_query($conn,$q);

        // echo "<pre>";
        // print_r($_FILES);
        if($res)
        {
            echo "<script>alert('Image added successfully')</script>"; 
        }
        else{
            echo "<script>alert('Image Not added')</script>"; 
        }
        
    }

?>
<main id="main" class="main">
  <section>
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form action="Add_memories.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Event name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="event_name" required>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile" name="event_pic" required>
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
    </div>
          
    </section>
  </main>
    <?php
        include "footer.php";
    ?>